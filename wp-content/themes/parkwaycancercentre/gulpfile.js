"use strict";

var gulp = require("gulp");
var sass = require('gulp-sass')(require('node-sass'));
var concat = require("gulp-concat");

gulp.task("sass", function () {
	return gulp
		.src("./assets/sass/*.sass")
		.pipe(concat("style.sass")) //output file will be style.css
		.pipe(sass().on("error", sass.logError))
		.pipe(gulp.dest("./")); //output file path
});

gulp.task("sass:watch", function () {
	gulp.watch("./assets/sass/*.sass", gulp.series("sass"));
});

gulp.task("default", gulp.series("sass:watch"));
