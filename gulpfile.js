var gulp = require('gulp'),
    concat = require('gulp-concat'),
    exec = require('child_process').exec,
    clean = require('gulp-clean'),
    compass = require('gulp-compass');


gulp.task('default', function() {
    gulp.src([
        './dev/css/*.css'
    ])
    .pipe(concat('ui.css'))
    .pipe(gulp.dest('./dev/css/concat'))
});

gulp.task('concat', function() {
    gulp.src([
        './dev/css/*.css'
    ])
    .pipe(clean())
    .pipe(concat('ui.min.css'))
    .pipe(gulp.dest('./app/css'))
});

gulp.task('compass', function() {
    return gulp.src('./dev/scss/*.scss')
        .pipe(compass({
            config_file: './config.rb',
            css: 'dev/css',
            sass: 'dev/scss',
            assetCacheBuster: false
        }))
        .pipe(gulp.dest('./dev/css'));
});

gulp.task('watch', function() {
    gulp.watch('./dev/scss/*.scss', ['compass', 'concat']);
});