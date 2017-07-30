var webpack = require('webpack')

module.exports = {
    entry: './entry.js',
    output: {
        path: __dirname+"/dist/js",
        filename: 'bundle.js'
    },
    module: {
        loaders: [
            {test: /\.css$/,loader: 'style-loader!css-loader'}]
    }
}