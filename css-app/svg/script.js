$( document ).ready( function() {

	$( '.squiggle-container' ).show();

	for ( i = 1; i < $('path').length + 1; i++ ) {
		var path = document.querySelector('.path' + i);
		var length = path.getTotalLength();
		path.style.transition = path.style.WebkitTransition = 'none';
		path.style.strokeDasharray = length + ' ' + length;
		path.style.strokeDashoffset = length;
		path.getBoundingClientRect();
		path.style.transition = path.style.WebkitTransition = 'stroke-dashoffset 1.5s ease-in-out';
		path.style.strokeDashoffset = '0';
	}

	setTimeout( function() {
	 	$( '.path, .path-last' ).addClass('active');
	}, 1500);

});

