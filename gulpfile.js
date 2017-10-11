var gulp   = require('gulp');
var sass   = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var minify = require('gulp-clean-css');


gulp.task('sass', function() {
    return gulp.src('src/monalisa.scss')
        .pipe(sass())
        .pipe(gulp.dest('dist/css'))
        .pipe(rename('monalisa.min.css'))
        .pipe(minify())
        .pipe(gulp.dest('dist/css'));
});

gulp.task('combine', function() {
    return gulp.src([
            'src/_scss/_variables.scss',
            'src/_scss/mixins/*.scss',
            'src/_scss/components/*.scss'
        ])
        .pipe(concat('monalisa.scss'))
        .pipe(gulp.dest('dist/scss'));
});

gulp.task('watch', function() {
    gulp.watch(['src/_scss/*.scss', 'src/_scss/components/*.scss', 'src/_scss/mixins/*.scss'], ['sass', 'combine']);
});

gulp.task('default', ['sass', 'combine']);