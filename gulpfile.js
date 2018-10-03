var gulp   = require('gulp');
var sass   = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var minify = require('gulp-clean-css');
var watch = require('gulp-watch');


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
            'src/_scss/base/*.scss',
            'src/_scss/utils/*.scss',
            'src/_scss/components/*.scss'
        ])
        .pipe(concat('monalisa.scss'))
        .pipe(gulp.dest('dist/scss'));
});

gulp.task('scripts', function(){
    return gulp.src(['src/js/libs/jquery.min.js','src/js/libs/*.js','src/js/components/*.js'])
        .pipe(concat('monalisa.js'))
        .pipe(gulp.dest('dist/js'))
});

gulp.task('watch', function() {
    gulp.watch([
        'src/_scss/*.scss',
        'src/_scss/components/*.scss',
        'src/_scss/mixins/*.scss',
        'src/_scss/base/*.scss',
        'src/_scss/utils/*.scss',
        'src/js/components/*.js'
    ], ['sass', 'combine', 'scripts']);
});

gulp.task('default', ['sass', 'combine', 'scripts']);