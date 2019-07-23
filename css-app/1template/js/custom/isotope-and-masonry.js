requirejs( [ 'require', 'jquery', 'isotopeLib' ], function( require, $, Isotope ) {

    require( [ 'lib/jquery.bridget' ], function( jQueryBridget ) {
      jQueryBridget( 'isotope', Isotope, $ );


      // Code for isotope
$( document ).ready( function() {
	$( '#masonry' ).isotope({
	  itemSelector: '.grid-item',
	  percentPosition: true,
	  layoutMode: 'masonry',
	  masonry: {
	    columnWidth: '.grid-sizer'
	  }
	});

	var $grid = $( '#grid-isotope' ).isotope({
	  itemSelector: '.element-item',
	  percentPosition: true,
	  layoutMode: 'fitRows'
	});

	$( '#filters-isotope' ).on( 'click', 'button', function() {
	  var filterValue = $( this ).attr( 'data-filter' );

	  $grid.isotope({ filter: filterValue });

	  $( '#filters-isotope' ).find( 'button' ).removeClass( 'active' );
	  $( this ).addClass( 'active' );
	});
});

    }
  );
});