var autoprefixer = require('autoprefixer');
var gulp = require('gulp');
var notify = require('gulp-notify');
var sass = require('gulp-sass');
var newer = require('gulp-newer');
var plumber = require('gulp-plumber');
var postcss = require('gulp-postcss');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var cleanCSS = require('gulp-clean-css');

function css() {
    return gulp.src('src/Monalisa.scss')
        .pipe(plumber({
            errorHandler: notify.onError("Error: <%= error.message %>")
        }))
        .pipe(sass({ outputStyle: 'expanded' }))
        .pipe(postcss([autoprefixer()]))
        .pipe(gulp.dest('dist/css'))
        .pipe(cleanCSS())
        .pipe(rename({ suffix: ".min" }))
        .pipe(gulp.dest('dist/css'));
}

function scss() {
    return gulp.src([
            'src/core/variables.scss',
            'src/core/mixins.scss',
            'src/core/normalize.css',
            'src/core/print.scss',
            'src/core/base.scss',
            'src/modifiers/*',
            'src/components/*'
        ])
        .pipe(plumber({
            errorHandler: notify.onError("Error: <%= error.message %>")
        }))
        .pipe(concat('Monalisa.scss'))
        .pipe(gulp.dest('dist/scss'));
}

function watch() {
    gulp.watch('src/**/*.scss', gulp.parallel(css, scss));
}

var build = gulp.parallel(css, scss);

exports.css = css;
exports.scss = scss;
exports.watch = watch;
exports.default = build;
