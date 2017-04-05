var gulp = require('gulp');
var sass = require('gulp-sass');
var webpack = require('gulp-webpack');

var path = {
    'src': 'resources/assets/sass/',
    'dest': 'public/css/'
}
var jspath = {
    'src': 'resources/assets/js/',
    'dest': 'public/js/'
}

gulp.task('scss', function() {
    return gulp.src(path.src + '**/*.scss')
        .pipe(sass())
        .pipe(gulp.dest(path.dest))
});
gulp.task('webpack', function() {
    return gulp.src(jspath.src + '**/*.js')
        .pipe(webpack({
          output: {
            filename: 'app.js',
          }
        }))
        .pipe(gulp.dest(jspath.dest))
});
