define( [ 'async!https://maps.googleapis.com/maps/api/js?key=AIzaSyAbY3baUdmLF-pUBW04eVMhThxuHSsOS5Y' ], function() {

	/* START GOOGLE MAPS */

	var mapCanvas = document.getElementById( 'map' ),
			myCenter = new google.maps.LatLng( 51.508742,-0.120850 ),
			mapOptions = {
				center: myCenter,
				zoom: 13,
				scrollwheel: false
			},
			map = new google.maps.Map( mapCanvas, mapOptions ),
			marker = new google.maps.Marker( { position: myCenter } ),
			infowindow = new google.maps.InfoWindow({
				content: 'Brew, the Tea Pub 114. Tooting High Street, SW17 0RR'
			});
	
  marker.setMap( map );
	
	google.maps.event.addListener( marker, 'click', function() {
		infowindow.open( map, marker );
	});

	/* END GOOGLE MAPS */

});