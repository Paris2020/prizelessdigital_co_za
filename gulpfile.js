'use strict';


//Seting directories up
var themes_folder = 'themes';

var path = {
    theme:  themes_folder + '/prizelessdigital/',
    scss:   'sass',
    css:    'css',
    js:     'js'
};

//Require plugins to be in use below through functions
var gulp          = require('gulp'),
    sass          = require('gulp-sass'),
    sourcemaps    = require('gulp-sourcemaps'),
    autoprefixer  = require('gulp-autoprefixer'),
    browserSync   = require('browser-sync'),
    fs            = require('fs'),
    reload        = browserSync.reload;


// Set paths e.g path.sass is actually themes/prizelessdigital/sass
path.scss   = path.theme + path.scss;
path.css    = path.theme + path.css;
path.js     = path.theme + path.js;


// These are the files we want to watch
var phpWatchFiles = '**/*.php',
    styleWatchFiles = path.scss +'**/*.scss';


if( fs.existsSync('./domain.json') ) {
    var domain        = require('./domain.json');
}

/*
- 1) This function will process the styles.scss file
-
- 2)
-
- 3)
-
- 4)
*/


//1
function css(){

    return gulp.src([path.scss + 'stytles.scss'])
    .pipe(sourcemaps.init({loadMaps:true}))
    .pipe(sass({
        outputStyle: 'expanded'
    }).on('error', path.sass.logError))
    .pipe(autoprefixer('last 10 versions', 'ie 10'))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(path.css));

}


//2
function watch(){

    browserSync.init({
        open: 'external',
        proxy: domain,
        startPath: "",
        files: path.css + '/*.css',
        notify: false,
        logConnections: true,
        reloadOnRestart: true,
    });
    gulp.watch(styleWatchFiles, css);
    gulp.watch(phpWatchFiles).on('change', browserSync.reload);
}


//3
exports.css = css;
exports.watch = watch;


//4
var build = gulp.parallel(watch);
gulp.task('default', build);




