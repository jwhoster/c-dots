// プラグイン
const gulp = require('gulp');
const header = require('gulp-header');
const sass = require('gulp-sass')(require('sass'));
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const sassGlob = require('gulp-sass-glob');
const notify = require('gulp-notify');
const plumber = require('gulp-plumber');
const browserSync = require('browser-sync').create();
const gcmq = require('gulp-group-css-media-queries');
const imagemin = require('gulp-imagemin');
const imageminPngquant = require('imagemin-pngquant');
const imageminMozjpeg = require('imagemin-mozjpeg');
const ftp = require('vinyl-ftp');

const mode = require('gulp-mode')({
  modes: ['production', 'development'],
  default: 'development',
  verbose: false,
});
const webpack = require('webpack');
const webpackStream = require('webpack-stream'); // gulpでwebpackを使うために必要なプラグイン

// webpackの設定ファイルの読み込み
const webpackConfig = require('./webpack.config');


const config = {
  'src_path': './src/assets/',
  'dist_path': './dist/assets/',
  'proxy': 'c-dots.localhost',
}

const sassOptions = {
  // outputStyle: 'nested | expanded | compact | compressed'
  outputStyle: 'compressed'
}

const plugins = [
  autoprefixer({
    grid: 'autoplace'
  }),
];


// sass
function sassFuncs() {
  return gulp
    .src(`${config.src_path}scss/**/*.scss`)
    .pipe(plumber({ errorHandler: notify.onError('Error: <%= error.message %>') }))
    .pipe(sassGlob())
    .pipe(sass(sassOptions))
    .pipe(postcss(plugins))
    .pipe(gcmq())
    .pipe(header('@charset "UTF-8";\n'))
    .pipe(gulp.dest(`${config.dist_path}css/`, { sourcemaps: './' }))
}


// javascript
// function jsFuncs() {
//   return gulp
//     .src([
//       `${config.src_path}js/lib/**/*.js`,
//       `${config.src_path}js/vendor/**/*.js`,
//       `${config.src_path}js/**/*.js`,
//       `!${config.src_path}js/**/_*.js`
//     ])
//     .pipe(plumber({ errorHandler: notify.onError('Error: <%= error.message %>') }))
//     .pipe(babel({presets: ["@babel/preset-env"]}))
//     .pipe(concat('main.js'))
//     .pipe(uglify())
//     .pipe(rename('main.min.js'))
//     .pipe(gulp.dest(`${config.dist_path}js/`, { sourcemaps: './' }));
// }



function imageCompression() {
  return gulp
    .src(`${config.src_path}/**/*.{png,jpg,gif,svg}`, {
      since: gulp.lastRun(imageCompression),
    })
    // .pipe(mode.production())
    .pipe(imagemin([
      imageminPngquant({ quality: [0.8, 0.9] }),
      imageminMozjpeg({ quality: 90 }),
      imagemin.gifsicle(),
      imagemin.optipng(),
      imagemin.svgo({plugins: [{removeViewBox: false}]})
    ]))
    .pipe(gulp.dest(`${config.dist_path}`));
}







// FTPアップロード
gulp.task('deploy', () => {
  const remoteDest = 'デプロイ先ディレクトリ';
  const globs = [
    'dist/**',
    '!dist/**/*.DS_Store'
  ];
  const conn = ftp.create({
    host: 'ホスト名',
    user: 'ユーザ名',
    password: 'パスワード',
  });
  return gulp
    .src(globs, {buffer: false, dot: true})
    .pipe(conn.newerOrDifferentSize(remoteDest))
    .pipe(conn.dest(remoteDest));
});




const browserReload = (done) => {
  browserSync.reload();
  done();
}



const watchBrowserSync = () => {
  if(config.proxy != '') {
    browserSync.init({
      proxy: `${config.proxy}`,
      files: [
        './dist/**/*'
      ],
      port: 3002
    });
  }
  else{
    browserSync.init({
      server: {
        baseDir: './dist/',
        index: 'index.html',
      },
      port: 3000
    });
  }

  return gulp
    .watch(['./dist/**/*'], browserReload);
}






// webpack
const bundleJs = () => {
  // webpackStreamの第2引数にwebpackを渡す
  return webpackStream(webpackConfig, webpack)
    .pipe(gulp.dest(`${config.dist_path}/js`));
};

const watchSassFiles = () =>
  gulp.watch(`${config.src_path}scss/**/*.scss`, sassFuncs);

const watchJsFiles = () =>
  gulp.watch(`${config.src_path}js/**/*.js`, bundleJs);


gulp.task('default', gulp.series(
  gulp.parallel(watchSassFiles, watchJsFiles, watchBrowserSync)
));

gulp.task('imagemin', imageCompression);
