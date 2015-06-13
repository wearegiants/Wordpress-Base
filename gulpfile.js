var gulp = require('gulp');
var less = require('gulp-less');
var autoprefixer = require('gulp-autoprefixer');
var minifyCSS = require('gulp-minify-css');
var notify = require('gulp-notify');
var gutil = require('gulp-util');
var browserSync = require('browser-sync').create();

var sourcePath = './src/';
var targetPath = './assets/';
var sourceLess = sourcePath + 'less';
var targetCss = targetPath + 'css';
var path = require('path');

gulp.task('default', ['watch','browser-sync']);

gulp.task('less', function () {

  return gulp.src([sourceLess + '/**.less'])
      .pipe(less({compress: true}).on('error', gutil.log))
      .pipe(autoprefixer('last 10 versions', 'ie 9'))
      .pipe(minifyCSS({keepBreaks: true}))
      .pipe(gulp.dest(targetCss))
      .pipe(notify('Less Compiled, Prefixed and Minified'))
      //.pipe(browserSync.stream());
});


gulp.task('watch', function() {
    gulp.watch('./src/less/*.less', ['less']);  // Watch all the .less files, then run the less task
   // gulp.watch('./src/less/site.theme.less', ['less']);  // Watch all the .less files, then run the less task
});

gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: "roosttheme.dev"
    });
});