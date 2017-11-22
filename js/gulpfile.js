var gulp = require('gulp'); 
var sass = require('gulp-sass'); 

gulp.task('Gith',function(){

    gulp.src('../sass/style.scss')
    .pipe(sass())
    .pipe(gulp.dest('../css')) ;

}) ;
