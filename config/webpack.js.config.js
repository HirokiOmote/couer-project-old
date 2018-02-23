'use strict';

import webpack from 'webpack';
import path from 'path';
import ExtractTextPlugin from 'extract-text-webpack-plugin';
import {config} from '../package';

const jsPath = [] = config.js;
const {input, output} = jsPath;

export default {
  entry : {
    main: `${path.resolve(input)}/main.js`
  },

  output : {
    path: path.resolve(output),
    filename: '[name].js'
  },

  cache : true,

  plugins: [
    new webpack.ProvidePlugin({
      $: "jquery",
      jQuery: "jquery"
    }),
    new webpack.optimize.UglifyJsPlugin({
      compressor: {
        warnings: false
      }
    })
  ],

  module : {
    loaders: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        loader: 'babel-loader!eslint-loader'
      }
    ]
  }
}
