const { defineConfig } = require('@vue/cli-service');

module.exports = defineConfig({
  transpileDependencies: true,
  configureWebpack: {
    resolve: {
      fallback: {
        "assert": false,
        // add other modules to exclude as needed
      },
    },
  },
  devServer: {
    proxy: 'https://resepsi-digital.my.id'
  }
});
