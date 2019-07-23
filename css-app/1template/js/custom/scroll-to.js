define( [ 'jquery' ], function( $ ) {

	/* START SCROLL TO */

	$( '.nav li a' ).on( 'click', function( e ) {
    if ( '' !== this.hash ) {
      e.preventDefault();
      var t = this.hash;
      $( 'html, body' ).animate( {
        scrollTop: $( t ).position().top - 40
      }, 800 );
    }
  } );

	function fadeButton() {
		if ( $( this ).scrollTop() > 100 ) {
			$( '#button-up' ).fadeIn();
		} else {
			$( '#button-up' ).fadeOut();
		}
	}

	fadeButton();

	$( window ).on( 'scroll', fadeButton );

	$( '#button-up' ).on( 'click', function() {
		$( 'html, body' ).animate( {
      scrollTop: 0
    }, 800 );
	} );

	/* END SCROLL TO */

} );