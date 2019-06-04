var themename = 'themes/prizelessdigital';

var gulp - require('gulp'),
    autoprefixer = require('gulp-autoprefixer'),
    browserSync = require('browser-sync').create(),
    reload = browserSync.reload,
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    imagemin = require('gulp-imagemin');


var root = '../' + themename + '/',
    scss = root + 'sass/',
    js = root + 'src/js/';


var phpWatchFiles = root + '**/*.php',
    styleWatchFiles = scss + '**/*.scss';

var cssSRC = [

    root + 'src/css/bootstrap-4.3.1/*.css',
    root + 'style.css'
];


var imgSRC = root + 'src/images/*',
    imgDEST = root + 'dist/images';



function css(){

    return gulp.src([scss + 'style.scss'])
    .pipe(sourcemaps.init({loadMaps: true}))
    .pipe(sass({
        outputStyle: 'expanded'
    }).on('error', sass.logError))
    .pipe(autoprefixer('last 10 versions'))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(root));
}


function imgmin(){
    return gulp.src(imgSRC)
    .pipe(changed(imgDEST))
    .pipe(imagemin([
        imagemin.gifsicle({interlaced: true}),
        imagemin.jpegtran({progressive: true})
        imagemin.optipng({optimizationLevel: 5})

    ]))
    .pipe(gulp.dest(imgDEST));
}


function watch(){
    browserSync.init({
        open: 'external',
        proxy: 'http://localhost/git'
        port: 8000,
    });
    gulp.watch(styleWatchFiles, gulp.series({css}));
    gulp.watch(imgSRC, imgmin);
    gulp.watch([phpWatchFiles, root + 'style.css']).on('change', browserSync.reload);

}


exports.css = css;
exports.imgmin = imgmin;
exports.watch = watch;

var build = gulp.paralell(watch);
gulp.task('default', build);




