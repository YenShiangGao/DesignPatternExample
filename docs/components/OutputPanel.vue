<template>
  <div
    class="php-playground__output"
    :class="{
      'php-playground__output--empty': !output && !isRunning,
      'php-playground__output--error': isError,
    }"
  >
    <template v-if="isRunning">
      <span class="php-playground__loading-spinner"></span>
      執行中...
    </template>
    <template v-else-if="output">{{ output }}</template>
    <template v-else>點擊「執行 PHP」查看輸出結果</template>
  </div>
</template>

<script setup lang="ts">
import { computed } from 'vue'

const props = defineProps<{
  output: string
  isRunning: boolean
}>()

const isError = computed(() => {
  return props.output.startsWith('Error:') ||
    props.output.includes('Fatal error') ||
    props.output.includes('Parse error') ||
    props.output.includes('Warning:')
})
</script>
