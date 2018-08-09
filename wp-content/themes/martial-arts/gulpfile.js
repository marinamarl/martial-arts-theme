'use strict';
var browserSync = require('browser-sync'),
    browserSync = require('browser-sync').create(),
    gulp = require('gulp'),
    gutil = require('gulp-util'),
    image = require('gulp-image'),
    prefixer = require('gulp-autoprefixer'),
    sass = require('gulp-sass'),
    cleanCSS = require('gulp-clean-css'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat'),
    connect = require('gulp-connect'),
    watch = require('gulp-watch');

    // the paths of where each item should reside or does reside, aka sources, as variables

    var jsSources = ['js/*.js'],
        sassSources = ['styles/*.scss'],
        outputDir = 'assets';

gulp.task('sass', function() {
  gulp.src(sassSources)
  .pipe(sass({style: 'expanded'}))
    .on('error', gutil.log)
  .pipe(gulp.dest('assets'))
  .pipe(connect.reload())
});

gulp.task('js', function() {
  gulp.src(jsSources)
  .pipe(uglify())
  .pipe(concat('script.js'))
  .pipe(gulp.dest(outputDir))
  .pipe(connect.reload())
});

gulp.task('watch', function() {
  gulp.watch(jsSources, ['js']);
  gulp.watch(sassSources, ['sass']);
});
gulp.task('browser-sync', function() {
  browserSync.init({
      proxy: "http://localhost/theming/Martial_Arts_Theme/"
  });
});

gulp.task('default', ['js', 'sass','watch','browser-sync']);
