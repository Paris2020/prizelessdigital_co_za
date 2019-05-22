'use strict';

/**
* Gulp specific config
*/

var themes_folder = 'themes';

var path = {
    theme:  themes_folder + '/prizelessdigital/',
    sass:   'sass',
    css:    'css',
    js:     'js',
    img:    'images',
};


var gulp          = require('gulp'),
    sass          = require('gulp-sass'),
    globbing      = require('gulp-css-globbing'),
    browserSync   = require('browser-sync'),
    reload        = browserSync.reload;


/* Set paths */
path.sass   = path.theme + path.sass;
path.css    = path.theme + path.css;
path.js     = path.theme + path.js;
path.img    = path.theme + path.img;


/* Gulp SASS task with browserSync*/
gulp.task('sass', function () {

  gulp.src(path.sass + '/**/*.scss')
    .pipe(globbing({ extensions: ['.scss'] }))
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(gulp.dest('./' + path.css))
    .pipe(browserSync.reload({stream: true}));
});


/* Gulp SASS dev compile task*/
gulp.task('sass-compile', function () {

  gulp.src(path.sass + '/**/*.scss')
    .pipe(globbing({ extensions: ['.scss'] }))
    .pipe(sass.sync().on('error', sass.logError).on('error', process.exit.bind(process, 1)))
    .pipe(gulp.dest('./' + path.css))
    .pipe(browserSync.reload({stream: true}));
});


/* Gulp compile dev task*/
gulp.task('compile', ['sass-compile']);


/* Gulp browserSync init task*/
gulp.task('browser-sync', function() {
  var vghostmode = false;
  var vopen = false;

  if(util.env.ghostmode) {
    var vghostmode = true;
  }
  if(util.env.open) {
    var vopen = true;
  }

  return browserSync.init(null, {
    proxy: domain,
    startPath: "",
    files: path.css + '/*.css',
    open: vopen,
    notify: false,
    logConnections: true,
    reloadOnRestart: true,
    ghostMode: {
      clicks: vghostmode,
      forms: vghostmode,
      scroll: vghostmode
    }
  });
});


/* Gulp Test task*/
gulp.task('test', function() {
  return browserSync.init(null, {
    proxy: domain,
    startPath: "",
    files: path.css + '/*.css',
    notify: false,
    logConnections: true,
    reloadOnRestart: true,
    ghostMode: {
      clicks: true,
      forms: true,
      scroll: true
    }
  });
});


/* Gulp browserSync init task*/
gulp.task('watch', ['browser-sync'], function () {
    gulp.watch(path.sass + '/**/*.scss', ['sass']);
    gulp.watch(path.js + '/**/*.js').on('change', reload);
    gulp.watch("*.html").on('change', reload);
});

/* Default task*/
gulp.task('default', ['watch']);


