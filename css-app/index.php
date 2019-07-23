<?php 

include_once 'connect.php';

// Output data for customer about works
if ( strlen( $_GET[ 'key' ] ) ) {

	$key = mysqli_escape_string( $connect, $_GET[ 'key' ] );

	$result = $connect->query( "SELECT * FROM css WHERE keyvalue = '$key'" );

  while( $rs = $result->fetch_array( MYSQLI_ASSOC ) ) {
	  $customer = $rs[ 'customer' ];
  }

}

?>

<html>
<head>
	<meta charset="UTF-8">
	<title>Leave a comment</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

		<img id="logo" src="img/logo.png" alt="">

		<form>

		<?php 
			$jobs = $connect->query( "SELECT * FROM css WHERE customer = '$customer'" );
	
	  	while( $rs = $jobs->fetch_array( MYSQLI_ASSOC ) ) {
	  		if ( !strlen( $rs[ 'css' ] ) ) {
			  	echo '<p class="par">Job title: <b>'. $rs[ 'job' ] .'</b></p>';
			  	echo '<img width="200" src="http://www.lucidica.com/css-app/img/engineers/';
echo ( preg_match("/Shpyl/i", strip_tags( explode( " ", $rs[ 'engineer' ] )[1] ))) ? "Shpyl" : explode( " ", $rs[ 'engineer' ] )[1];
echo '.jpg">';
			  	echo '<p class="par">Engineer: <b>'. $rs[ 'engineer' ] .'</b></p>
			  	<p class="par">Date: <b>'. explode( " ", explode( "-", $rs[ 'timestamp' ] )[2] )[0] .'-'. explode( "-", $rs[ 'timestamp' ] )[1] .'-'. explode( "-", $rs[ 'timestamp' ] )[0] .'</b></p>
			  	<div class="button-wrap css-select">
						<p>How satisfied were you with the job?</p>
						<input type="radio" id="'. $rs[ 'keyvalue' ] .'-1" name="css" value="1">
						<label for="'. $rs[ 'keyvalue' ] .'1" class="button"><span>1</span></label>
						<input type="radio" id="'. $rs[ 'keyvalue' ] .'-2" name="css" value="2">
						<label for="'. $rs[ 'keyvalue' ] .'2" class="button"><span>2</span></label>
						<input type="radio" id="'. $rs[ 'keyvalue' ] .'-3" name="css" value="3">
						<label for="'. $rs[ 'keyvalue' ] .'3" class="button"><span>3</span></label>
						<input type="radio" id="'. $rs[ 'keyvalue' ] .'-4" name="css" value="4">
						<label for="'. $rs[ 'keyvalue' ] .'4" class="button"><span>4</span></label>
						<input type="radio" id="'. $rs[ 'keyvalue' ] .'-5" name="css" value="5">
						<label for="'. $rs[ 'keyvalue' ] .'5" class="button"><span>5</span></label>
						<input type="radio" id="'. $rs[ 'keyvalue' ] .'-6" name="css" value="6">
						<label for="'. $rs[ 'keyvalue' ] .'6" class="button"><span>6</span></label>
						<input type="radio" id="'. $rs[ 'keyvalue' ] .'-7" name="css" value="7">
						<label for="'. $rs[ 'keyvalue' ] .'7" class="button"><span>7</span></label>
						<input type="radio" id="'. $rs[ 'keyvalue' ] .'-8" name="css" value="8">
						<label for="'. $rs[ 'keyvalue' ] .'8" class="button"><span>8</span></label>
						<input type="radio" id="'. $rs[ 'keyvalue' ] .'-9" name="css" value="9">
						<label for="'. $rs[ 'keyvalue' ] .'9" class="button"><span>9</span></label>
						<input type="radio" id="'. $rs[ 'keyvalue' ] .'-10" name="css" value="10">
						<label for="'. $rs[ 'keyvalue' ] .'10" class="button"><span>10</span></label>
					</div>
					<p style="display: none;" class="par">If you would like to discuss this job or the comments left please contact us on <a href="mailto:'. $rs[ 'accountengineeremail' ] .'?subject=Comments for job '. $rs[ 'job' ] .'">yaroslav@lucidica.com</a></p>';
				}
	  	}
  	?><br>

			<div class="button-wrap nps">
				<p>How likely are you, to recommend us to a friend or colleague?</p>
				<input type="radio" id="npm1" name="npm" value="1">
				<label for="npm1" class="button"><span>1</span></label>
				<input type="radio" id="npm2" name="npm" value="2">
				<label for="npm2" class="button"><span>2</span></label>
				<input type="radio" id="npm3" name="npm" value="3">
				<label for="npm3" class="button"><span>3</span></label>
				<input type="radio" id="npm4" name="npm" value="4">
				<label for="npm4" class="button"><span>4</span></label>
				<input type="radio" id="npm5" name="npm" value="5">
				<label for="npm5" class="button"><span>5</span></label>
				<input type="radio" id="npm6" name="npm" value="6">
				<label for="npm6" class="button"><span>6</span></label>
				<input type="radio" id="npm7" name="npm" value="7">
				<label for="npm7" class="button"><span>7</span></label>
				<input type="radio" id="npm8" name="npm" value="8">
				<label for="npm8" class="button"><span>8</span></label>
				<input type="radio" id="npm9" name="npm" value="9">
				<label for="npm9" class="button"><span>9</span></label>
				<input type="radio" id="npm10" name="npm" value="10">
				<label for="npm10" class="button"><span>10</span></label>
			</div>

			<label id="comment-label" for="comment">Leave a comment (optional)</label>
			<textarea id="comment" name="comment" cols="30" rows="10" placeholder="Please leave your comment"></textarea>

			<input id="key" type="text" name="keycom" value="<?php echo $key; ?>">
			<button id="confirm"><span>Confirm</span></button>
		</form>
		
		<div id="myModal" class="modal">
			<div class="modal-content">
				<span class="close">&times;</span>
				<img src="img/success.png" alt="">
				<h2>Thank you.</h2>
				<p>Your opinion is very important to us.</p>
			</div>
		</div>

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script>
	$( document ).ready( function() {

		//SELECT CSS BUTTON
		$( '.css-select > label, .nps > label' ).on( 'click', function() {
			$( this ).addClass( 'active' ).siblings( 'label' ).removeClass( 'active' );
		});

		$( '#confirm' ).on( 'click', function( e ) {
			e.preventDefault();

			$( '.css-select' ).each( function() {
				var active = $( this ).find( '.active' );

				if ( $( this ).find( '.active' ).is( ':visible' ) ) {

					$.ajax({
						type: 'POST',
						url: 'record.php',
						data: {
							key: active.prev().attr( 'id' ).split( '-' )[0],
							css: active.prev().val(),
							npm: $( '.nps' ).find( '.active' ).prev().val(),
							comment: $( '#comment' ).val()
						},
						success: function() {
							location.reload();
						}
					});
				}
			});
		});

		var modal = document.getElementById( 'myModal' ),
				jModal = $( '#myModal' );

		if ( !$( '.css-select' ).is( ':visible' ) ) {
			jModal.fadeIn();

			setTimeout( function() {
				window.location.replace( 'http://www.lucidica.com/' );
			}, 3000);
		}
		
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

		$( 'form' ).find( 'img' ).on( 'error', function() { this.src = 'img/user.png'; } );
		
	});
	</script>
</body>
</html>