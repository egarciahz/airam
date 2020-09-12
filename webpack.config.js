const path = require('path');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const { CleanWebpackPlugin } = require('clean-webpack-plugin');

const buildPath = path.resolve(__dirname, "public/assets");
const appPath = path.resolve(__dirname, "assets");
const publicPath = "/assets/";

module.exports = {
    target: "web",
    mode: "development",
    devtool: "source-map",
    context: appPath,
    output: {
        publicPath,
        path: buildPath,
        libraryTarget: "umd",
    },
    plugins: [
        new CleanWebpackPlugin(),
        new MiniCssExtractPlugin({
            filename: "[name].css",
            chunkFilename: "[id].css"
        })
    ],
    module: {
        rules: [
            {
                test: /\.(png|jpe?g|gif)$/i,
                loader: 'file-loader',
                options: {
                    publicPath,
                    name: "[name].[ext]",
                    outputPath: path.resolve(buildPath, "images"),
                },
            },
            {
                test: /\.css$/i,
                exclude: /node_modules/,
                use: [
                    MiniCssExtractPlugin.loader,
                    { loader: "css-loader", options: { importLoaders: 1, sourceMap: true } }
                ]
            },
            {
                test: /\.jsx?$/,
                use: [
                    {
                        loader: 'babel-loader',
                        options: {
                            presets: ['@babel/preset-env']
                        }
                    },
                    'astroturf/loader'
                ],
            }
        ]
    }
};