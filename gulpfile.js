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
    return gulp.src('src/scss/Monalisa.scss')
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
            'src/scss/core/variables.scss',
            'src/scss/core/mixins.scss',
            'src/scss/core/normalize.css',
            'src/scss/core/print.scss',
            'src/scss/core/base.scss',
            'src/scss/modifiers/*',
            'src/scss/components/*'
        ])
        .pipe(plumber({
            errorHandler: notify.onError("Error: <%= error.message %>")
        }))
        .pipe(concat('Monalisa.scss'))
        .pipe(gulp.dest('dist/scss'));
}

function js() {
    return gulp.src('src/js/Monalisa.js')
        .pipe(plumber({
            errorHandler: notify.onError("Error: <%= error.message %>")
        }))
        .pipe(gulp.dest('dist/js'))
        .pipe(uglify())
        .pipe(rename({ suffix: ".min" }))
        .pipe(gulp.dest('dist/js'));
}

function watch() {
    gulp.watch('src/scss/**/*.scss', gulp.parallel(css, scss));
    gulp.watch('src/js/**/*.js', gulp.parallel(js));
}

var build = gulp.parallel(css, scss, js);

exports.css = css;
exports.scss = scss;
exports.js = js;
exports.watch = watch;
exports.default = build;
