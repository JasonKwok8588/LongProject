let gulp = require('gulp');

// let ts = require('gulp-typescript');//gulp插件 使得gulp可以访问ts编译器
// let tsProject = ts.createProject('tsconfig.json');

// gulp.task('default', function () {
//     return tsProject.src().pipe(tsProject()).js.pipe(gulp.dest('dist'))
// })

var browserify = require("browserify");// 通过预编译 浏览器可以使用 comment.js 规范 引入npm模块
var source = require('vinyl-source-stream');// 将browserify输出文件适配成gulp能够解析的格式
var watchify = require("watchify");// 监视器-启动gulp并保持热更新
var tsify = require("tsify");// tsify 是browserify的插件 使它能够访问ts编译器
var gutil = require("gulp-util");// ?

let path = {
    pages:['src/*.html']
};

