"use strict";

var gulp = require("gulp");
var less = require("gulp-less");
var plumber = require("gulp-plumber");
var postcss = require("gulp-postcss");
var autoprefixer = require("autoprefixer");
var server = require("browser-sync").create();

gulp.task("style", function() {
    gulp.src("html/less/styles.less")
        .pipe(plumber())
        .pipe(less())
        .pipe(postcss([
            autoprefixer({browsers: [
                "last 1 version",
                "last 2 Chrome versions",
                "last 2 Firefox versions",
                "last 2 Opera versions",
                "last 2 Edge versions"
            ]})
        ]))
        .pipe(gulp.dest("html/css"))
        .pipe(server.stream());
});

gulp.task("serve", ["style"], function() {
    server.init({
        server: "./html",
        notify: false,
        open: true,
        ui: false
    });

    gulp.watch("html/less/**/*.less", ["style"]);
    gulp.watch("html/*.html").on("change", server.reload);
    gulp.watch("html/js/*.js").on("change", server.reload);
});