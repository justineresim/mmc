var gulp = require('gulp');
var notify = require('gulp-notify');
var sass = require('gulp-ruby-sass');
var rename = require('gulp-rename');
var cssnano = require('gulp-cssnano');
var postcss      = require('gulp-postcss');
var sourcemaps   = require('gulp-sourcemaps');
var autoprefixer = require('autoprefixer');

// Styles
gulp.task('styles', function() {
  return sass('sass/style.scss', { style: 'expanded' })
    .pipe(sourcemaps.init())
    .pipe(postcss([ autoprefixer({ browsers: ['last 4 versions'] }) ]))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('../mmc'))
    .pipe(notify({ message: 'Styles task complete' }));
});

gulp.task('watch', function() {
    gulp.watch('sass/**/*.scss', ['styles']);
});

gulp.task('default', ['styles', 'watch']);