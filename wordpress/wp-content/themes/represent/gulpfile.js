var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
gulp.task('sass',function(){
return gulp.src(['scss/**/*.scss','custom/**/*.scss'])
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(sourcemaps.write())
.pipe(gulp.dest("stylesheets"));
});

gulp.task('js',function(){
return gulp.src(['node_modules/bootstrap/dist/js/bootstrap.min.js', 'node_modules/jquery/dist/jquery.min.js', 'node_modules/tether/dist/js/tether.min.js'])
.pipe(gulp.dest("src/js"));
});

gulp.task('serve',['sass'],function() {
gulp.watch(['scss/**/*.scss','custom/**/*.scss'],['sass']);
});
gulp.task('default',['serve']);