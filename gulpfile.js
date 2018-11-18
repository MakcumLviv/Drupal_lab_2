const gulp = require('gulp');
const sass = require('gulp-sass');
const cleanCSS = require('gulp-clean-css');


gulp.task('sass', () => {
    return gulp.src('./src/sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./build/css'));
});

gulp.task('sass:watch', () => {
    gulp.watch('./src/sass/**/*.scss', ['sass']);
});


gulp.task('minify', () => {
  return gulp.src('./build/css/*.css')
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(gulp.dest('./build/min-css'));
});