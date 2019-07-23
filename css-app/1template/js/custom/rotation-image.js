define( [ 'jquery' ], function( $ ) {

/* START ROTATION IMAGES */

if ( $( 'div.rotator' ).is( ':visible' ) ) {
  
  var sliderElementRotation = document.getElementById( 'rotation' ),
			thumbElementRotation = sliderElementRotation.children[0];

  $( 'div.rotator' ).on( 'mousedown touchstart', moveFirst ); 
      
  function moveFirst( e ) {
    var thumbCoordsRotation = getCoords( thumbElementRotation ),
			  shiftXRotation = 0,
			  sliderCoordsRotation = getCoords( sliderElementRotation );
		
	  if ( e.type != 'touchstart' ) {
	  	shiftXRotation = e.pageX - thumbCoordsRotation.left;
	  } else {
	  	shiftXRotation = e.originalEvent.touches[0].pageX - thumbCoordsRotation.left;
	  }

    $( document ).on( 'mousemove touchmove', move );
			
    function move( e ) {
      var newLeftRotation = 0;
      
			if ( e.type != 'touchmove' ) {
				newLeftRotation = e.pageX - shiftXRotation - sliderCoordsRotation.left;
			} else {
				newLeftRotation = e.originalEvent.touches[0].pageX - shiftXRotation - sliderCoordsRotation.left;
			}
				
      var numOfImages = $( 'div.rotation-image-container' ).find( 'div.rotation-image' ).length,
					o = ( newLeftRotation + $( 'div.rotator' ).width() / 2 ) / $( 'div.rotation' ).width() * 100,
					t = Math.min( numOfImages - 1, Math.max( 0, Math.floor( o / ( 100 / numOfImages ) ) ) ),
					rightEdgeRotation = sliderElementRotation.offsetWidth - thumbElementRotation.offsetWidth;
        
      $( 'div.rotation-image-container' ).find( 'div.rotation-image' ).removeClass( 'active' );
      $( 'div.rotation-image-container' ).find( 'div.rotation-image' ).eq( t ).addClass( 'active' );

      if ( newLeftRotation < 0 ) { newLeftRotation = 0; }
				
      if ( newLeftRotation > rightEdgeRotation ) { newLeftRotation = rightEdgeRotation; }

      thumbElementRotation.style.left = newLeftRotation + 'px';
    }
        
    $( document ).on( 'mouseup touchend', function(){
      $( document ).off( 'mousemove touchmove' );
    } );
      
    return false;
  }

  thumbElementRotation.ondragstart = function() {
    return false;
  };

  function getCoords( element ) {
    var boxRotation = element.getBoundingClientRect();

    return {
      top: boxRotation.top + pageYOffset,
      left: boxRotation.left + pageXOffset
    };
  }
}


if ( $( 'div.rotator2' ).is( ':visible' ) ) {
  
  var sliderElementRotation2 = document.getElementById( 'rotation2' ),
			thumbElementRotation2 = sliderElementRotation2.children[0];

  $( 'div.rotator2' ).on( 'mousedown touchstart', moveFirst2 ); 
      
  function moveFirst2( e2 ) {
    var thumbCoordsRotation2 = getCoords2( thumbElementRotation2 ),
				shiftXRotation2 = 0,
				sliderCoordsRotation2 = getCoords2( sliderElementRotation2 );
		
    if ( e2.type != 'touchstart' ) {
      shiftXRotation2 = e2.pageX - thumbCoordsRotation2.left;
    } else {
      shiftXRotation2 = e2.originalEvent.touches[0].pageX - thumbCoordsRotation2.left;
    }

    $( document ).on( 'mousemove touchmove', move2 );
		
    function move2( e2 ) {
      var newLeftRotation2 = 0;
        
      if ( e2.type != 'touchmove' ) {
        newLeftRotation2 = e2.pageX - shiftXRotation2 - sliderCoordsRotation2.left;
      } else {
        newLeftRotation2 = e2.originalEvent.touches[0].pageX - shiftXRotation2 - sliderCoordsRotation2.left;
      }
        
      var numOfImages2 = $( 'div.rotation-image-container2' ).find( 'div.rotation-image2' ).length,
					o2 = ( newLeftRotation2 + $( 'div.rotator2' ).width() / 2 ) / $( 'div.rotation2' ).width() * 100,
					t2 = Math.min( numOfImages2 - 1, Math.max( 0, Math.floor( o2 / ( 100 / numOfImages2 ) ) ) ),
					rightEdgeRotation2 = sliderElementRotation2.offsetWidth - thumbElementRotation2.offsetWidth;
        
      $( 'div.rotation-image-container2' ).find( 'div.rotation-image2' ).removeClass( 'active' );
      $( 'div.rotation-image-container2' ).find( 'div.rotation-image2' ).eq( t2 ).addClass( 'active' );

      if ( newLeftRotation2 < 0 ) { newLeftRotation2 = 0; }
			
      if ( newLeftRotation2 > rightEdgeRotation2 ) { newLeftRotation2 = rightEdgeRotation2; }

      thumbElementRotation2.style.left = newLeftRotation2 + 'px';
    }
        
    $( document ).on( 'mouseup touchend', function(){
      $( document ).off( 'mousemove touchmove' );
    } );
      
    return false;
  }

  thumbElementRotation2.ondragstart = function() {
    return false;
  };

  function getCoords2( element2 ) {
    var boxRotation2 = element2.getBoundingClientRect();

    return {
      top: boxRotation2.top + pageYOffset,
      left: boxRotation2.left + pageXOffset
    };
  }
}

/* END ROTATION IMAGES */

} );