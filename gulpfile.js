/**
 * パッケージ格納
 */

const { src, dest, watch } = require('gulp'); // Gulp本体
const sass = require('gulp-sass'); // Sass（コンパイル必須）
const plumber = require('gulp-plumber'); //エラーによる動作停止を回避
const notify = require('gulp-notify'); //エラー通知
//const sourcemaps = require('gulp-sourcemaps'); // デバック確認
//const sourcemaps = require('gulp-changed'); // 変更があったファイルを更新


/**
 * ディレクトリパス格納
 */
let allHtml = './**/*.html'; // 全ての.htmlファイル
let allScss = './assets/**/*.scss'; // 全ての.scssファイル

let cssPath = './assets/css';



/**
 * タスク設定
 */

/* -------------------------------------------
*  SCSS コンパイル
------------------------------------------- */

const compileSass = () =>
  // style.scssファイルを取得
  src('assets/scss/**/*.scss')
    .pipe(plumber({
      errorHandler: notify.onError({
        title: "Sassエラー発見！",
        message: "<%= error.message %>"
      })
    }))
    //.pipe(sourcemaps.init()) // ソースマップの初期化
    .pipe(
      sass({
        // outputStyle: 'expanded'
        outputStyle: 'compressed'
      })
    )
    //.pipe(sourcemaps.write()) // ソースマップの作成
    .pipe(dest('assets/css')); // cssフォルダ以下に保存


/* -------------------------------------------
*  Init & Watch 初期化・監視
------------------------------------------- */

// ファイルを監視し、変更があったらSassを変換
const watchFiles = () => {
  //bsInit();
  watch('assets/scss/**/*.scss', compileSass);
  //watch('scss/**/*.scss', bsReload);
  //watch(allHtml, bsReload);
}

// npx gulpを実行後、watchFilesが実行
exports.default = watchFiles;
