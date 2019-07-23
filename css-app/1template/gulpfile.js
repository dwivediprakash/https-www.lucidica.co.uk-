var gulp = require( 'gulp' ),
gulpLoadPlugins = require( 'gulp-load-plugins' ),
plugins = gulpLoadPlugins(),
browserSync = require( 'browser-sync' ).create(),
reload = browserSync.reload,
sass = require( 'gulp-sass' ),
image = require( 'gulp-image' );

// MINIFY IMG

gulp.task( 'img', function () {
  gulp.src( '*.png' )
    .pipe(image({
      pngquant: true,
      optipng: true,
      zopflipng: true,
      jpegRecompress: true,
      jpegoptim: true,
      mozjpeg: true,
      guetzli: true,
      gifsicle: true,
      svgo: true,
      concurrent: 10
    }))
    .pipe( gulp.dest( 'images' ) );
});


// RELOAD
gulp.task( 'bs', function() {
	browserSync.init( {
    proxy: "1template:80/",
    port: 81,
  	host: '1template',
  	open: 'external'
  });
});

// SASS CONVERTER
gulp.task( 'sass', function () {
  gulp.src( 'style.scss' )
    .pipe( sass().on( 'error', sass.logError ) )
    .pipe( gulp.dest( './' ) );
});

// LIVERELOAD AND OTHER FUNCTIONS
gulp.task( 'default', function () {
  gulp.run( 'bs' );

  gulp.watch( 'style.scss', [ 'sass' ] ).on( 'change', reload );

  gulp.watch( '*.*' ).on( 'change', reload );

  gulp.watch( 'js/**/*' ).on( 'change', reload );
});