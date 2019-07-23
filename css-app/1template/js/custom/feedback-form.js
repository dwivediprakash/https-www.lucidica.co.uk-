define( [ 'jquery' ], function( $ ) {
$( '#feedback-button' ).on( 'click', function() {
		var name = $( '#feedback-name' ),
				email = $( '#feedback-email' ),
				phone = $( '#feedback-phone' ),
				message = $( '#feedback-message' );

		if ( name.val().length >= 2 &&
				name.val().length <= 50 &&
				name.val().match( /^[a-zA-Z]+$/ ) &&
				email.val().length >= 3 &&
				email.val().length <= 50 &&
				email.val().match( /^( [a-zA-Z0-9_.-] )+@( [a-zA-Z0-9_.-] )+\.( [a-zA-Z] )+( [a-zA-Z] )+$/ ) &&
				phone.val().length >= 3 &&
				phone.val().length <= 15 &&
				phone.val().match( /^[0-9\( \ )\+\s\-]+$/ ) &&
				message.val().length >= 2 &&
				message.val().length <= 500
				 ) {
			$.ajax( {
				type: 'POST',
				url: '../feedback.php',
				data: {
					name: name.val(),
					email: email.val(),
					phone: phone.val(),
					message: message.val()
				},
				success: function() {
					name.val( '' );
					email.val( '' );
					phone.val( '' );
					message.val( '' );
				}
			} );
		}

		if ( name.val().length >= 2 &&
				 name.val().length <= 50 &&
				 name.val().match( /^[a-zA-Z]+$/ )  ) {
			name.removeClass( 'error' );
		} else {
			name.addClass( 'error' );
		}

		if ( email.val().length >= 3 &&
				 email.val().length <= 50 &&
				 email.val().match( /^( [a-zA-Z0-9_.-] )+@( [a-zA-Z0-9_.-] )+\.( [a-zA-Z] )+( [a-zA-Z] )+$/ ) ) {
			email.removeClass( 'error' );
		} else {
			email.addClass( 'error' );
		}

		if ( phone.val().length >= 3 &&
				 phone.val().length <= 15 &&
				 phone.val().match( /^[0-9\( \ )\+\s\-]+$/ ) ) {
			phone.removeClass( 'error' );
		} else {
			phone.addClass( 'error' );
		}

		if ( message.val().length >= 2 &&
				 message.val().length <= 500 ) {
			message.removeClass( 'error' );
		} else {
			message.addClass( 'error' );
		}
	} );
} );