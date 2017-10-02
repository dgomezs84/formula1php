var		gulp				= require('gulp'),
			concat			= require('gulp-concat'),
			uglify			= require('gulp-uglify'),
			compass			= require('gulp-compass'),
			plumber			= require('gulp-plumber'),
			cleancss		= require('gulp-clean-css'),
			sourcemaps	= require('gulp-sourcemaps'),
			browsersync	= require('browser-sync');

gulp.task('default',['minify-js','minify-css','mincss','browser-sync','watch']);

gulp.task('minify-js', function () {
  gulp.src('src/js/**/*.js')
  .pipe(plumber({
		errorHandler: function (error) {
			console.log(error.message);
			this.emit('end');
	}}))
  .pipe(concat('script.min.js'))
  .pipe(uglify())
  .pipe(gulp.dest('js/'))
});

gulp.task('minify-css', function() {
	gulp.src('src/scss/**/*.scss')
	.pipe(sourcemaps.init())
	.pipe(plumber())
	.pipe(compass({
		css:'src/css',
		sass:'src/scss',
		sourcemap: true,
		style: "expanded",
		require: ['breakpoint'],
	}))
	.pipe(sourcemaps.write('.'))
	.pipe(gulp.dest('src/css/'))
	.pipe(browsersync.stream());
});

gulp.task('mincss', function() {
  return gulp.src('src/css/style.css')
    .pipe(sourcemaps.init({
			loadMaps: true
		}))
    .pipe(cleancss())
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('css/'))
})

gulp.task('browser-sync', function(){
	browsersync.init({
		injectChanges: true,
		files: ['**/*.html','./css/*.css','./js/*.js'],
		server: "./",
	});
});

gulp.task('watch', function() {
	gulp.watch('src/js/**/*.js', ['minify-js']);
	gulp.watch('src/scss/**/*.scss', ['minify-css']);
	gulp.watch('src/css/**/*.css', ['mincss']);
});
