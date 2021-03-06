"use strict";

const gulp = require('gulp'),
	sass = require('gulp-sass'),
	browserSync = require('browser-sync').create(),
	concat = require('gulp-concat'),
	uglify = require('gulp-uglify'),
	cssnano = require('gulp-cssnano'),
	rename = require('gulp-rename'),
	del = require('del'),
	imagemin = require('gulp-imagemin'),
	pngquant = require('imagemin-pngquant'),
	cache = require('gulp-cache'),
	autoprefixer = require('gulp-autoprefixer'),
	pump = require('pump'),
	watch = require('gulp-watch'),
	babel = require('gulp-babel');
	

const srv = 'project02.gr';

const myScripts = [
    'app/script/jquery.min.js',
    'app/script/jquery.validate.min.js',
    'app/script/modernizr.js',
    'app/script/jquery.inputmask.bundle.min.js',
    'app/script/tingle.min.js',
    'app/script/flickity.pkgd.min.js',
    'app/script/bootstrap.min.js',
	'app/script/parallax.js',
    'app/script/myscript.js'
];
const myStyles =[]
;

function scripts() {

	return gulp.src(myScripts)
		.pipe(concat('scripts.min.js'))
		// .pipe(babel({
        //     presets: ['env']
        // }))
		.pipe(uglify())
		.pipe(gulp.dest('app/common'));
}

function styles(){
	return gulp.src('./app/scss/mystyle.scss')
	.pipe(sass())
	.pipe(rename({suffix: '.min'}))
	.pipe(gulp.dest('app/css'))
		.pipe(browserSync.stream());
}

function php() {
	return gulp.src('*.php')
		.pipe(gulp.dest('.'))
		.pipe(browserSync.reload);
}

function defaultTask() {


}

gulp.task('serve', function(){

	browserSync.init({
        proxy: srv
    });
	
	// gulp.watch('app/scss/**/*.scss',gulp.parallel('style'));
	// gulp.watch('./app/scss/**/*.scss',{usePolling: true} , gulp.series(styles));
	watch('./app/scss/**/*.scss',{usePolling: true},styles);
	gulp.watch('app/script/**/*.js', gulp.series('script')).on('change', browserSync.reload);

	// gulp.watch('app/**/*.php').on('change', browserSync.reload);
	gulp.watch('./app/**/*.php',{usePolling: true}).on('change', browserSync.reload);
	gulp.watch('./app/**/*.html').on('change', browserSync.reload);
	gulp.watch('app/**/*.html').on('change', browserSync.reload);
});


// gulp.task('default', function(){
// 	console.log('default');
// 	gulp.series('serve');
// });
gulp.task('default', gulp.parallel('serve'));
exports.script = scripts;
exports.style = styles;
// exports.default = defaultTask;

// gulp.task('script', scripts);

