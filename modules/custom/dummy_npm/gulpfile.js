const gulp = require('gulp');
const sass = require('gulp-sass');
sass.logError = undefined;
const sourcemaps = require('gulp-sourcemaps');
const autoprefixer = require('autoprefixer');
const postcss = require('gulp-postcss');
const lost = require('lost');

gulp.task('sass', function () {
  return gulp.src('./assets/styles/scss/styles-*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(postcss([
      lost(),
      autoprefixer(),
    ]))
    .pipe(sourcemaps.write('./maps'))
    .pipe(gulp.dest('./assets/styles/css/'));
});

gulp.task('watch', function () {
  gulp.watch('./assets/styles/scss/**', ['sass']);
});

gulp.task('default', ['watch', 'sass']);
