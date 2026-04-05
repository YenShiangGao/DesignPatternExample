<template>
  <div class="php-playground">
    <!-- File tabs -->
    <div class="php-playground__file-tabs">
      <button
        v-for="(file, index) in currentFiles"
        :key="file.filename"
        class="php-playground__file-tab"
        :class="{
          'php-playground__file-tab--active': activeFileIndex === index,
          'php-playground__file-tab--readonly': isFileReadonly(file.filename),
        }"
        @click="activeFileIndex = index"
      >
        {{ file.filename }}
        <span v-if="isFileReadonly(file.filename)" style="font-size: 11px; opacity: 0.6"> (唯讀)</span>
      </button>
    </div>

    <!-- Mode tabs -->
    <div class="php-playground__mode-tabs">
      <button
        class="php-playground__mode-tab"
        :class="{ 'php-playground__mode-tab--active': mode === 'exercise' }"
        @click="mode = 'exercise'"
      >
        練習模式
      </button>
      <button
        class="php-playground__mode-tab"
        :class="{ 'php-playground__mode-tab--active': mode === 'answer' }"
        @click="mode = 'answer'"
      >
        參考答案
      </button>
    </div>

    <!-- Editor -->
    <div class="php-playground__editor-container">
      <ClientOnly>
        <div v-if="!editorReady" class="php-playground__loading">
          <span class="php-playground__loading-spinner"></span>
          載入編輯器中...
        </div>
        <MonacoEditor
          v-else
          :key="`${mode}-${activeFileIndex}`"
          v-model="currentCode"
          language="php"
          :read-only="mode === 'answer' || isFileReadonly(currentFile.filename)"
          :height="350"
        />
      </ClientOnly>
    </div>

    <!-- Actions -->
    <div class="php-playground__actions">
      <button
        class="php-playground__btn php-playground__btn--run"
        :disabled="isRunning || !phpReady"
        @click="handleRun"
      >
        {{ isRunning ? '執行中...' : '▶ 執行 PHP' }}
      </button>
      <button
        class="php-playground__btn php-playground__btn--reset"
        @click="handleReset"
      >
        ↺ 重置
      </button>
      <span v-if="!phpReady" style="font-size: 12px; color: var(--vp-c-text-3); align-self: center; margin-left: 8px;">
        <span class="php-playground__loading-spinner" style="width: 14px; height: 14px;"></span>
        PHP 引擎載入中...
      </span>
    </div>

    <!-- Output -->
    <OutputPanel :output="output" :is-running="isRunning" />
  </div>
</template>

<script setup lang="ts">
import { ref, computed, watch, onMounted } from 'vue'
import MonacoEditor from './MonacoEditor.vue'
import OutputPanel from './OutputPanel.vue'
import { usePhpWasm } from '../composables/usePhpWasm'

interface CodeFile {
  filename: string
  code: string
}

const props = withDefaults(defineProps<{
  files: CodeFile[]
  answerFiles: CodeFile[]
  entryFile?: string
  readonlyFiles?: string[]
}>(), {
  entryFile: 'index.php',
  readonlyFiles: () => [],
})

const mode = ref<'exercise' | 'answer'>('exercise')
const activeFileIndex = ref(0)
const editorReady = ref(false)

// Deep copy of exercise files for editing
const editableFiles = ref<CodeFile[]>([])

function resetFiles() {
  editableFiles.value = props.files.map(f => ({ ...f, code: f.code }))
}

onMounted(async () => {
  resetFiles()
  editorReady.value = true
  // Init php-wasm in background
  init()
})

const { isReady: phpReady, isRunning, output, init, runPhp } = usePhpWasm()

const currentFiles = computed(() => {
  return mode.value === 'exercise' ? editableFiles.value : props.answerFiles
})

const currentFile = computed(() => {
  return currentFiles.value[activeFileIndex.value] || currentFiles.value[0]
})

const currentCode = computed({
  get() {
    return currentFile.value?.code || ''
  },
  set(value: string) {
    if (mode.value === 'exercise' && editableFiles.value[activeFileIndex.value]) {
      editableFiles.value[activeFileIndex.value].code = value
    }
  },
})

function isFileReadonly(filename: string): boolean {
  return props.readonlyFiles.includes(filename)
}

// Reset file index when switching modes if current index is out of bounds
watch(mode, () => {
  if (activeFileIndex.value >= currentFiles.value.length) {
    activeFileIndex.value = 0
  }
})

async function handleRun() {
  const filesToRun = mode.value === 'exercise' ? editableFiles.value : props.answerFiles
  await runPhp(filesToRun, props.entryFile)
}

function handleReset() {
  resetFiles()
  output.value = ''
}
</script>
