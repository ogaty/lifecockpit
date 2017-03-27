var gulp = require('gulp');
var sass = require('gulp-sass');

var path = {
    'src': 'resources/assets/sass/',
    'dest': 'public/css/'
}

gulp.task('scss', function() {
    return gulp.src(path.src + '**/*.scss')
        .pipe(sass())
        .pipe(gulp.dest(path.dest))
});
