var themename = 'themes/prizelessdigital';

var gulp = require('gulp'),
    autoprefixer = require('gulp-autoprefixer'),
    browserSync = require('browser-sync').create(),
    reload = browserSync.reload,
    sass = require('gulp-sass'),
    globbing = require('gulp-css-globbing'),
    sourcemaps = require('gulp-sourcemaps'),
    imagemin = require('gulp-imagemin'),
    fs = require('fs'),
    php = require('gulp-connect-php');


if( fs.existsSync('./domain.json') ) {
    var domain = require('./domain.json');
}


var root = themename + '/',
    scss = root + 'sass/',
    js = root + 'src/js/';

    //db_connect = root + 'includes/db_connect.inc.php'


var phpWatchFiles = root + '**/*.php',
    indexPhpWatchFile = 'index.php',
    styleWatchFiles = scss + '**/*.scss';

var cssSRC = [

    root + 'src/css/bootstrap-4.3.1/*.css',
    root + 'styles.css'
];


var imgSRC = root + 'src/images/*',
    imgDEST = root + 'dist/images';



function css(){

    return gulp.src([scss + 'styles.scss'])
    .pipe(globbing({ extensions: ['.scss'] }))
    .pipe(sourcemaps.init({loadMaps: true}))
    .pipe(sass({
        outputStyle: 'expanded'
    }).on('error', sass.logError))
    .pipe(autoprefixer('last 2 versions'))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(root));
}


function printCSS(){
    return gulp.src(cssSRC)
    .pipe(sourcemaps.init({loadMaps: true, largeFile: true}))
    .pipe(gulp.dest(root));
}

function imgmin(){
    return gulp.src(imgSRC)
    .pipe(changed(imgDEST))
    .pipe(imagemin([
        imagemin.gifsicle({interlaced: true}),
        imagemin.jpegtran({progressive: true}),
        imagemin.optipng({optimizationLevel: 5})

    ]))
    .pipe(gulp.dest(imgDEST));
}


function phpConnect(){

    return php.server({
        base: './',
        port: 8888,
        keepalive: true
    });

}


function watch(){
    browserSync.init({
        open: 'external',
        proxy: domain,
        baseDir: './',
        files: [ root + 'styles.css',
                 root + '/src/js/*.js'],
        ghostMode: {
            clicks: true,
            forms: true,
            scroll: false
        }
    });
    gulp.watch('*.html').on('change', reload);
    gulp.watch(styleWatchFiles, gulp.series([css,printCSS]));
    gulp.watch(imgSRC, imgmin);
    gulp.watch([phpWatchFiles, indexPhpWatchFile, root + 'styles.css']).on('change', browserSync.reload);

}


exports.css = css;
exports.printCSS = printCSS;
exports.imgmin = imgmin;
exports.watch = watch;
exports.phpConnect = phpConnect;

var build = gulp.parallel(watch, phpConnect);
gulp.task('default', build);
