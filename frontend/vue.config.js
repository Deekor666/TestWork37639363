const {defineConfig} = require('@vue/cli-service')
module.exports = defineConfig({
    lintOnSave: false,
    transpileDependencies: true,
    devServer: {
        open: true,
        port: 8080,
        https: false,
    },
})