var webpack = require('webpack-stream'),
    gulp = require('gulp'),
    gulprimraf = require('gulp-rimraf');

var assetsDir = 'assets/';
var productionDir = '../assets/';


var resourceCacheDir = '../core/cache/resource/';
var pdoToolsCacheDir = '../core/cache/default/pdotools/';
var snippetsCacheDir = '../core/cache/includes/elements/modsnippet/';
var scriptsCacheDir = '../core/cache/scripts/elements/modsnippet/';
var pluginsScriptCacheDir = '../core/cache/scripts/elements/modplugin/';
var pluginsCacheDir = '../core/cache/includes/elements/modplugin/';
var templatesDir = '../core/components/gitmodx/elements/templates/';
var snippetsDir = '../core/components/gitmodx/elements/snippets/';
var chunksDir = '../core/components/gitmodx/elements/chunks/';
var pluginsDir = '../core/components/gitmodx/elements/plugins/';

gulp.task('webpack', function(){
    return gulp.src(assetsDir + 'js/vue/app.js')
        .pipe(webpack( require('./webpack.config.js') ))
        .pipe(gulp.dest(productionDir+'js/vue/'));
});

//MODX CLEAN CACHE
gulp.task('clean-resources-cache',function () {
    return gulp.src(resourceCacheDir + '*', {read: false})
        .pipe(gulprimraf({force: true}));
});

gulp.task('clean-pdotools-cache',function(){
    return gulp.src(pdoToolsCacheDir + '**/*.php', {read: false})
        .pipe(gulprimraf({force:true}));
});

gulp.task('clean-snippets-cache',function(){
    return gulp.src(snippetsCacheDir + '*', {read: false})
        .pipe(gulprimraf({force:true})) && gulp.src(scriptsCacheDir + '*', {read: false})
        .pipe(gulprimraf({force:true}));
});

gulp.task('clean-plugins-cache',function(){
    return gulp.src(pluginsCacheDir + '*', {read: false})
        .pipe(gulprimraf({force:true})) && gulp.src(pluginsScriptCacheDir + '*', {read: false})
        .pipe(gulprimraf({force:true}));
});

//WATCH
gulp.task('watch', function (done) {
    gulp.watch(assetsDir+'js/vue/**/*', gulp.series('webpack'));

    gulp.watch(templatesDir + '**/*.tpl', gulp.series('clean-resources-cache','clean-pdotools-cache','clean-snippets-cache'));
    gulp.watch(chunksDir + '**/*.tpl', gulp.series('clean-resources-cache','clean-pdotools-cache','clean-snippets-cache'));
    gulp.watch(snippetsDir + '**/*.php', gulp.series('clean-resources-cache','clean-pdotools-cache','clean-snippets-cache'));
    gulp.watch(pluginsDir + '**/*.php', gulp.series('clean-plugins-cache'));

    done();
});