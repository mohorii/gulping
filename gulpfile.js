const {src, dest, series, watch} = require('gulp');

const dartSass = require('sass');
const gulpSass = require('gulp-sass');
const compileSass = gulpSass(dartSass);
const minifyCss = require('gulp-clean-css');
const sourceMaps = require('gulp-sourcemaps');

const minify = require('gulp-minify');
const rollup = require('gulp-better-rollup');
const babel = require('rollup-plugin-babel');
const resolve = require('rollup-plugin-node-resolve');
const commonjs = require('rollup-plugin-commonjs');
const globals = require('rollup-plugin-node-globals');

// @todo: add Autoprefixer

function buildJs() {
  return src('src/*.js')
    .pipe(sourceMaps.init())
    .pipe(rollup({
      plugins: [babel(), resolve(), commonjs(), globals()]
    }, 'iife'))
    .pipe(minify({
      ext: {
        src: '.js',
        min: '.js'
      },
      noSource: true
    }))
    .pipe(sourceMaps.write())
    .pipe(dest('assets/'))
}


const buildCss = () => {
  return src('src/*.scss')
    .pipe(sourceMaps.init())
    .pipe(compileSass({
      includePaths: ['node_modules']
    }, null).on('error', compileSass.logError))
    .pipe(minifyCss())
    .pipe(sourceMaps.write())
    .pipe(dest('assets/'))
}

const watchFiles = () => {
  watch('src/**/*.scss', buildCss);
  watch('src/**/*.js', buildJs);
}

exports.buildCss = buildCss;
exports.buildJs = buildJs;
exports.watchFiles = watchFiles;

exports.default = series(buildCss, buildJs);
