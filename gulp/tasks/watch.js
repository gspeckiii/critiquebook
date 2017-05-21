var gulp = require('gulp'),
watch=require('gulp-watch'),
browserSync=require("browser-sync").create();

gulp.task('watch',function(){
	browserSync.init({
		proxy: "localhost/critiquebook/app",
    	port: 8000,
		notify: false,
		/*server:{
			baseDir:"app"
		}*/
	});
	watch('./app/index.php',function(){
		browserSync.reload();
	});
	watch('./app/admin.php',function(){
		browserSync.reload();
	});
	watch('./app/php-includes/**/*.php',function(){
		browserSync.reload();
	});
	watch('./app/php-functions/**/*.php',function(){
		browserSync.reload();
	});

	watch('./app/assets/styles/**/*.css',function(){
	 gulp.start('cssInject');
	});
	watch('./app/assets/scripts/**/*.js',function(){
		gulp.start('scriptsRefresh');
	});
});

gulp.task('cssInject',['styles'],function() {
	return gulp.src('./app/temp/styles/styles.css')
	.pipe(browserSync.stream());
});
gulp.task('scriptsRefresh',['scripts'],function(){
	browserSync.reload();
})