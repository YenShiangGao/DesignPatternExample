import DefaultTheme from 'vitepress/theme'
import type { Theme } from 'vitepress'
import PhpPlayground from '../../components/PhpPlayground.vue'
import './style/custom.css'

export default {
  extends: DefaultTheme,
  enhanceApp({ app }) {
    app.component('PhpPlayground', PhpPlayground)
  }
} satisfies Theme
