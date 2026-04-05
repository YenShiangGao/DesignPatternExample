import { ref, type Ref } from 'vue'

let phpInstance: any = null
let phpReady: Promise<any> | null = null

export interface PhpWasmResult {
  isReady: Ref<boolean>
  isRunning: Ref<boolean>
  output: Ref<string>
  init: () => Promise<void>
  runPhp: (files: { filename: string; code: string }[], entryFile: string) => Promise<void>
}

export function usePhpWasm(): PhpWasmResult {
  const isReady = ref(false)
  const isRunning = ref(false)
  const output = ref('')

  async function init() {
    if (isReady.value) return

    if (!phpReady) {
      phpReady = (async () => {
        const { PhpWeb } = await import('php-wasm/PhpWeb.mjs')
        const php = new PhpWeb()
        await php.binary
        return php
      })()
    }

    phpInstance = await phpReady
    isReady.value = true
  }

  function buildCombinedCode(files: { filename: string; code: string }[], entryFile: string): string {
    // Order files: entry file last, others first (dependencies before dependents)
    const entry = files.find(f => f.filename === entryFile)
    const others = files.filter(f => f.filename !== entryFile)

    const allFiles = [...others, ...(entry ? [entry] : [])]

    // Combine all files into one script:
    // - Strip <?php tags and require_once statements
    // - Concatenate in order
    const parts = allFiles.map(f => {
      let code = f.code
      // Remove opening <?php tag
      code = code.replace(/^<\?php\s*/i, '')
      // Remove require_once / require / include lines
      code = code.replace(/^(require_once|require|include_once|include)\s+.*?;\s*$/gm, '')
      return `// === ${f.filename} ===\n${code}`
    })

    return `<?php\n${parts.join('\n\n')}`
  }

  async function runPhp(files: { filename: string; code: string }[], entryFile: string) {
    if (!phpInstance) {
      await init()
    }

    isRunning.value = true
    output.value = ''

    try {
      // Collect output via event listeners
      let stdout = ''
      let stderr = ''

      const onOutput = (event: any) => {
        const data = event.detail?.[0] ?? event.detail ?? ''
        if (typeof data === 'string') {
          stdout += data
        } else if (typeof data === 'number') {
          stdout += String.fromCharCode(data)
        } else if (data instanceof ArrayBuffer || ArrayBuffer.isView(data)) {
          stdout += new TextDecoder().decode(data)
        }
      }

      const onError = (event: any) => {
        const data = event.detail?.[0] ?? event.detail ?? ''
        if (typeof data === 'string') {
          stderr += data
        } else if (typeof data === 'number') {
          stderr += String.fromCharCode(data)
        } else if (data instanceof ArrayBuffer || ArrayBuffer.isView(data)) {
          stderr += new TextDecoder().decode(data)
        }
      }

      phpInstance.addEventListener('output', onOutput)
      phpInstance.addEventListener('error', onError)

      const combinedCode = buildCombinedCode(files, entryFile)
      await phpInstance.run(combinedCode)

      phpInstance.removeEventListener('output', onOutput)
      phpInstance.removeEventListener('error', onError)

      // Clean up output: replace <br> tags with newlines
      let result = stdout.replace(/<br\s*\/?>/gi, '\n').trim()

      if (stderr) {
        result += (result ? '\n' : '') + stderr
      }

      output.value = result || '(no output)'
    } catch (e: any) {
      output.value = `Error: ${e.message || e}`
    } finally {
      isRunning.value = false
    }
  }

  return { isReady, isRunning, output, init, runPhp }
}
