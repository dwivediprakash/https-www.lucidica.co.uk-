var gulp = require( 'gulp' ),
gulpLoadPlugins = require( 'gulp-load-plugins' ),
plugins = gulpLoadPlugins(),
browserSync = require( 'browser-sync' ).create(),
reload = browserSync.reload,
sass = require( 'gulp-sass' ),
image = require( 'gulp-image' ),
autoprefixer = require( 'gulp-autoprefixer' );


// RELOAD
gulp.task( 'bs', function() {
	browserSync.init( {
    proxy: "angular:82/",
    port: 81,
  	host: 'angular',
  	open: 'external'
  });
});

// AUTOPREFIXER


// LIVERELOAD AND OTHER FUNCTIONS
gulp.task( 'default', function () {
  gulp.run( 'bs' );

  gulp.watch( 'style.scss', [ 'sass' ] ).on( 'change', reload ); // wp-content/themes/hitthetheatre/css/style.scss

  gulp.watch( '*.*' ).on( 'change', reload ); // wp-content/**/*

  gulp.watch( 'js/**.*' ).on( 'change', reload );
});