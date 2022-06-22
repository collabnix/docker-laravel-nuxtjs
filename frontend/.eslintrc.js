module.exports = {
  root: true,
  env: {
    browser: true,
    node: true
  },
  parserOptions: {
    parser: '@babel/eslint-parser',
    requireConfigFile: false
  },
  extends: [
    '@nuxtjs',
    'plugin:nuxt/recommended'
  ],
  plugins: [
  ],
  // add your custom rules here
  rules: {
    semi: [2, 'always'] // Agrega la obligación de usar punto y coma
  },
  overrides: [
    {
      files: [
        'src/pages/**/*.vue',
        'src/layouts/**/*.vue'
      ],
      rules: {
        'vue/multi-word-component-names': 0
      }
    }
  ]
};
