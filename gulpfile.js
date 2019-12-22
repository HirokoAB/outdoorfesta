//gulp プラグインの読み込み
const gulp = require("gulp");
//Sassをコンパイルするプラグインの読み込み
const sass = require("gulp-sass");

const postcss = require("gulp-postcss");
const autoprefixer = require("autoprefixer");



gulp.task("default",function(){
	//style.cssファイルを監視
	return gulp.watch("./sass/**/index_style.scss",function() {
		return(

			gulp
			.src("./sass/**/index_style.scss")
			.pipe(
				sass({
					outputStyle:"expanded"
				})
					.on("error",sass.logError)
				)
		    .pipe(gulp.dest("./css"))
		    
		);
	});
});

// gulp.task("default",function(){
// 	//style.cssファイルを監視
// 	return gulp.watch("./sass/**/style.scss",function() {
// 		return(

// 			gulp
// 			.src("./sass/**/style.scss")
// 			.pipe(
// 				sass({
// 					outputStyle:"expanded"
// 				})
// 					.on("error",sass.logError)
// 				)
// 		    .pipe(gulp.dest("./css"))
		    
		    
// 		);
// 	});
// });