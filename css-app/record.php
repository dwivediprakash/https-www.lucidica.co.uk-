<?php 

include_once 'connect.php';

// Record rate
if ( strlen( $_POST[ 'key' ] ) ) {
	$key = mysqli_escape_string( $connect, $_POST[ 'key' ] );
	$css = mysqli_escape_string( $connect, $_POST[ 'css' ] );
	$npm = mysqli_escape_string( $connect, $_POST[ 'npm' ] );
	$comment = mysqli_escape_string( $connect, $_POST[ 'comment' ] );

  $connect->query( "UPDATE css SET comment = '$comment', css = '$css', npm = '$npm' WHERE keyvalue = '$key'" );
}

?>