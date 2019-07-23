define( [ 'jquery' ], function( $ ) {

/* START INTERACTIVE IMAGE */

if ( document.getElementById( 'switcher' ) ) {

	var sliderElem = document.getElementById( 'switcher' );
  var thumbElem = sliderElem.children[ 0 ];

  $( 'div.thumb' ).on( 'mousedown touchstart', moveFirst ); 
      
  function moveFirst( e ) {
    var thumbCoords = getCoords( thumbElem );
    var shiftX = 0;
		if ( e.type != 'touchstart' ) {
			shiftX = e.pageX - thumbCoords.left;
		} else {
			shiftX = e.originalEvent.touches[ 0 ].pageX - thumbCoords.left;
    }

    var sliderCoords = getCoords( sliderElem );

    $( document ).on( 'mousemove touchmove', move );
    function move( e ) {
      var newLeft = 0;
      if ( e.type != 'touchmove' ) {
      	newLeft = e.pageX - shiftX - sliderCoords.left;
      } else {
      	newLeft = e.originalEvent.touches[ 0 ].pageX - shiftX - sliderCoords.left;
      }
				
      $( 'div.interactive-image-img1' ).width( newLeft );

      if ( newLeft < 0 ) {
        newLeft = 0;
      }

      var rightEdge = sliderElem.offsetWidth - thumbElem.offsetWidth;

      if ( newLeft > rightEdge ) {
        newLeft = rightEdge;
        $( 'div.interactive-image-img1' ).css( 'width', '100%' );
      }

      thumbElem.style.left = newLeft + 'px';
    }
        
    $( document ).on( 'mouseup touchend', function( ) {
      $( document ).off( 'mousemove touchmove' );
    } );
      
    return false;
  }
  
  thumbElem.ondragstart = function( ) {
    return false;
  };

  function getCoords( elem ) {
    var box = elem.getBoundingClientRect( );
    return {
      top: box.top + pageYOffset,
      left: box.left + pageXOffset
    };
  }
  
  $( 'div.interactive-image-img1' ).on( 'click', function( ) {
    $( this ).animate( { width: '100%' }, 1000 );
    $( 'div.thumb' ).animate( { left: '100%' }, 1000 );
  } );
  
  $( 'div.interactive-image-img2' ).on( 'click', function( ) {
    $( 'div.interactive-image-img1' ).animate( { width: '0' }, 1000 );
    $( 'div.thumb' ).animate( { left: '0' }, 1000 );
  } );
}


if ( document.getElementById( 'switcher2' ) ) {
	var sliderElem2 = document.getElementById( 'switcher2' );
  var thumbElem2 = sliderElem2.children[ 0 ];

  $( 'div.thumb2' ).on( 'mousedown touchstart', moveFirst2 ); 
      
  function moveFirst2( e ) {
    var thumbCoords2 = getCoords2( thumbElem2 );
    var shiftX2 = 0;
		if ( e.type != 'touchstart' ) {
			shiftX2 = e.pageX - thumbCoords2.left;
		} else {
			shiftX2 = e.originalEvent.touches[ 0 ].pageX - thumbCoords2.left;
		}

    var sliderCoords2 = getCoords2( sliderElem2 );

    $( document ).on( 'mousemove touchmove', move2 );
    function move2( e ) {
      var newLeft2 = 0;
			if ( e.type != 'touchmove' ) {
				newLeft2 = e.pageX - shiftX2 - sliderCoords2.left;
			} else {
				newLeft2 = e.originalEvent.touches[ 0 ].pageX - shiftX2 - sliderCoords2.left;
			}
				
      $( 'div.interactive-image2-img1' ).width( newLeft2 );

      if ( newLeft2 < 0 ) {
        newLeft2 = 0;
      }
      var rightEdge2 = sliderElem2.offsetWidth - thumbElem2.offsetWidth;
      if ( newLeft2 > rightEdge2 ) {
        newLeft2 = rightEdge2;
        $( 'div.interactive-image2-img1' ).css( 'width', '100%' );
      }

      thumbElem2.style.left = newLeft2 + 'px';
    }
        
    $( document ).on( 'mouseup touchend', function( ) {
      $( document ).off( 'mousemove touchmove' );
    } );
      
    return false;
  }
  
  thumbElem2.ondragstart = function( ) {
    return false;
  };

  function getCoords2( elem2 ) {
    var box2 = elem2.getBoundingClientRect( );
    return {
      top: box2.top + pageYOffset,
      left: box2.left + pageXOffset
    };
  }
  
  $( 'div.interactive-image2-img1' ).on( 'click', function( ) {
    $( this ).animate( { width: '100%' }, 1000 );
    $( 'div.thumb2' ).animate( { left: '100%' }, 1000 );
  } );
  
  $( 'div.interactive-image2-img2' ).on( 'click', function( ) {
    $( 'div.interactive-image2-img1' ).animate( { width: '0' }, 1000 );
    $( 'div.thumb2' ).animate( { left: '0' }, 1000 );
  } );
}

/* END INTERACTIVE IMAGE */

} );