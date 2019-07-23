define( [ 'jquery' ], function( $ ) {

  /* START TABS */
  
  $( 'div.tabs' ).eq( 0 ).find( 'div' ).on( 'click', function() {
    var tabsContent = $( 'div.tabs-content' );
    
    $( 'div.tabs' ).eq( 0 ).find( 'div' ).removeClass( 'active' );
    $( this ).addClass( 'active' );
    
    tabsContent.eq( 0 ).children( 'div' ).removeClass( 'active' );
    tabsContent.eq( 0 ).children( 'div' ).eq(  $( this ).index()  ).addClass( 'active' );
  } );
  
  /* END TABS */

} );