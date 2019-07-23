define( [ 'jquery' ], function( $ ) {

	/* START PRELAODER */
	var preloader = $( '#page-preloader' ),
	    spinner = preloader.find( 'span' );
	spinner.fadeOut();
	preloader.delay(350).fadeOut( 'slow' );

	/* END PRELAODER */

});