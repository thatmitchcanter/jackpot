'use strict';
 
var gulp = require('gulp');
var sass = require('gulp-sass');
 
gulp.task('sass', function () {
  return gulp.src('./assets/stylesheets/*.scss')
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(gulp.dest('.'));
});
 
gulp.task('sass:watch', function () {
  gulp.watch('./assets/stylesheets/*.scss', ['sass']);
});

gulp.task('watch', function () {
  gulp.watch('./assets/stylesheets/*.scss', ['sass']);
});

gulp.task('default', function () {
  return gulp.src('./assets/stylesheets/*.scss')
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(gulp.dest('.'));
  gulp.watch('./assets/stylesheets/*.scss', ['sass']);
});