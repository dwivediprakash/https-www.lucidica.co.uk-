define( [ 'jquery' ], function( $ ) {

  /* START TYPED TEXT */
	
	var word = $( '#typed-text' ).text(),
      wordLength = word.length,
      letterCounter = 0;
  
  $( '#typed-text' ).text( '' );
  
  setInterval( function() {
    if ( letterCounter < wordLength ) {
      $( '#typed-text' ).text( $( '#typed-text' ).text() + word[letterCounter] );
      letterCounter = letterCounter + 1; 
    }
  }, 200);
	
  /* END TYPED TEXT */

});