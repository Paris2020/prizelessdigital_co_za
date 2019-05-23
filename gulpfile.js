'use strict';


//Seting directories up
var themes_folder = 'themes';

var path = {
    theme:  themes_folder + '/prizelessdigital/',
    sass:   'sass',
    css:    'css',
    js:     'js'
};

//Require plugins to be in use below through functions
var gulp          = require('gulp'),
    util          = require('gulp-util'),
    sass          = require('gulp-sass'),
    globbing      = require('gulp-css-globbing'),
    browserSync   = require('browser-sync'),
    reload        = browserSync.reload;


// Set paths e.g path.sass is actually themes/prizelessdigital/sass
path.sass   = path.theme + path.sass;
path.css    = path.theme + path.css;
path.js     = path.theme + path.js;

var dev = util.env.env != 'prod' ? true : false;
var no_error_exit = false;

/*
 - Lets define all the necessary tasks:
 -- 1) Gulp define sass task with globbing & browserSync
 -- 2) Gulp define sass-compile task
 -- 3) Gulp define compile task which calls the sass-compile task
 -- 4) Gulp define browserSync init task
 -- 6) Gulp define watch task
 -- 7) Default task which calls the watch task
 -- 8) Gulp compile task whcih calls the sass task
*/

//1
gulp.task('sass', function () {

  gulp.src(path.sass + '/**/*.scss')
    .pipe(globbing({ extensions: ['.scss'] }))
    .pipe(no_error_exit ? sass.sync().on('error', sass.logError) : sass.sync())
    .pipe(gulp.dest('./' + path.css))
    .pipe(browserSync.reload({stream: true}))
    .pipe(dev ? filter([path.css + '/**/*.css', '!' + path.css + '/animate.css']) : util.noop())
    .pipe(dev ? duration('moved all files to /css folder') : util.noop());
});


//
gulp.task('browser-sync', function() {

  return browserSync.init(null, {
    proxy: domain,
    startPath: "",
    files: path.css + '/*.css',
    notify: false,
    logConnections: true,
    reloadOnRestart: true
  });
});


//
gulp.task('watch', ['browser-sync'], function () {
    no_error_exit = true;
    gulp.watch(path.sass + '/**/*.scss', ['sass']);
    gulp.watch(path.js + '/**/*.js').on('change', reload);
    gulp.watch("*.html").on('change', reload);
});


//
gulp.task('default', ['watch']);

//
gulp.task('compile', ['sass']);




