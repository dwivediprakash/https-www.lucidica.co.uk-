define( [ 'jquery' ], function( $ ) {

	$( 'div.accordion-container' ).eq( 0 ).find( 'div.accordion-block:first-child > div:first-child' ).addClass( 'active' );
	$( 'div.accordion-container' ).eq( 0 ).find( 'div.accordion-block:first-child > div:last-child' ).show();

	$( 'div.accordion-button' ).on( 'click', function() {

    if (  $( this ).hasClass( 'active' )  ) {
      $( this ).removeClass( 'active' );
      $( this ).siblings( '.accordion-content' ).slideUp( 200 );
    } else {
    	$( 'div.accordion-button' ).removeClass( 'active' );
    	$( this ).addClass( 'active' );
    	$( '.accordion-content' ).slideUp( 200 );
    	$( this ).siblings( '.accordion-content' ).slideDown( 200 );
    }
    
  } );

} );