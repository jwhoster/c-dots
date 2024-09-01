module.exports = {
  // モード値を production に設定すると最適化された状態で、
  // development に設定するとソースマップ有効でJSファイルが出力される
  mode: 'production',
  // mode: "development",

  // ローカル開発用環境を立ち上げる
  // 実行時にブラウザが自動的に localhost を開く
  devServer: {
    contentBase: 'dist',
    open: false // 自動的にブラウザが立ち上がる
  },

  // メインとなるJavaScriptファイル（エントリーポイント）
  // entry: `./src/assets/js/main.js`,
  entry: {
    main: [
      './src/assets/js/main.js',
    ],
    about: [
      './src/assets/js/pages/about.js',
    ],
    projects: [
      './src/assets/js/pages/projects.js',
    ],
    service: [
      './src/assets/js/pages/service.js',
    ],
  },


  // module: {
  //   rules: [
  //     {
  //       // 拡張子 .js の場合
  //       test: /\.js$/,
  //       // 処理対象から外すファイル
  //       exclude: /node_modules/,
  //       use: [
  //         {
  //           // Babel を利用する
  //           loader: 'babel-loader',
  //           // Babel のオプションを指定する
  //           options: {
  //             // compact: true,
  //             presets: [
  //               // プリセットを指定することで、ES2020 を ES5 に変換
  //               '@babel/preset-env',
  //             ]
  //           }
  //         }
  //       ]
  //     }
  //   ]
  // },

  // ファイルの出力設定
  output: {
    // 出力ファイル名
    filename: '[name].bundle.js'
  },

};
