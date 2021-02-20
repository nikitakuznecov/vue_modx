const path = require('path');
const { VueLoaderPlugin } = require('vue-loader');

module.exports = {
    mode: 'development',
    entry: './assets/js/vue/app.js',
    output: {
        path: path.resolve("../assets/js/vue"),
        publicPath: "assets/vue/js/",
        filename: "app.js"
    },
    module: {
        rules: [
            {
                test: /\.vue$/,
                loader: 'vue-loader'
            }
        ]
    },
    plugins: [
        // make sure to include the plugin!
        new VueLoaderPlugin()
    ]
};