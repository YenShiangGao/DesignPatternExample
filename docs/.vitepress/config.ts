import { defineConfig } from 'vitepress'
import { withMermaid } from 'vitepress-plugin-mermaid'

export default withMermaid(
  defineConfig({
    title: 'PHP 設計模式教學',
    description: '互動式 PHP 設計模式教學網站 — 一邊學習、一邊實作',
    lang: 'zh-TW',
    base: '/DesignPatternExample/',

    head: [
      ['meta', { name: 'theme-color', content: '#3eaf7c' }],
    ],

    themeConfig: {
      nav: [
        { text: '首頁', link: '/' },
        { text: '建立型模式', link: '/creational/singleton' },
        { text: '結構型模式', link: '/structural/adapter' },
        { text: '行為型模式', link: '/behavior/strategy' },
      ],

      sidebar: [
        {
          text: '建立型模式 Creational',
          collapsed: false,
          items: [
            { text: '單例模式 Singleton', link: '/creational/singleton' },
            { text: '簡單工廠 Simple Factory', link: '/creational/simple-factory' },
            { text: '工廠方法 Factory Method', link: '/creational/factory-method' },
            { text: '抽象工廠 Abstract Factory', link: '/creational/abstract-factory' },
            { text: '建造者模式 Builder', link: '/creational/builder' },
            { text: '原型模式 Prototype', link: '/creational/prototype' },
          ]
        },
        {
          text: '結構型模式 Structural',
          collapsed: false,
          items: [
            { text: '轉接器模式 Adapter', link: '/structural/adapter' },
            { text: '橋接模式 Bridge', link: '/structural/bridge' },
            { text: '組合模式 Composite', link: '/structural/composite' },
            { text: '裝飾模式 Decorator', link: '/structural/decorator' },
            { text: '外觀模式 Facade', link: '/structural/facade' },
          ]
        },
        {
          text: '行為型模式 Behavior',
          collapsed: false,
          items: [
            { text: '策略模式 Strategy', link: '/behavior/strategy' },
          ]
        }
      ],

      outline: {
        label: '本頁目錄',
        level: [2, 3]
      },

      docFooter: {
        prev: '上一篇',
        next: '下一篇'
      },

      darkModeSwitchLabel: '深色模式',
      sidebarMenuLabel: '選單',
      returnToTopLabel: '回到頂部',
    },

    vite: {
      optimizeDeps: {
        exclude: ['php-wasm']
      },
      ssr: {
        noExternal: ['monaco-editor']
      }
    },

    mermaid: {},
  })
)
