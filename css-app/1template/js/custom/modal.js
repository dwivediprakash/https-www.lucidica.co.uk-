define( [ 'jquery' ], function( $ ) {

	/* START MODAL WINDOW */

	var modal = document.getElementById( 'myModal' ),
			jModal = $( '#myModal' );
 
	$( '#button-action' ).on('click', function() {
		jModal.fadeIn();
	});

	$( '.close' ).on('click', function() {
	  jModal.fadeOut();
	});

	window.onclick = function( event ) {
	  if ( event.target == modal ) {
	    jModal.fadeOut();
	  }
	}

	$(document).keydown(function(e) {
	  if( e.keyCode === 27 ) {
	    jModal.fadeOut();
	  }
	});

	/* END MODAL WINDOW */

});