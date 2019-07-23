<?php 

include_once 'connect.php';

if ( strlen( $_GET[ 'key' ] ) ) {

	$key = mysqli_escape_string( $connect, $_GET[ 'key' ] );

	$result = $connect->query( "SELECT * FROM css WHERE keyvalue = '$key'" );

	// Find email in main database, add in "unsubscribed" table and delete from main table
  if( $rs = $result->fetch_array( MYSQLI_ASSOC ) ) {
  	$customer_mail = $rs[ 'mail' ];
		// Check if there is value in DB
		$result_unsubscribed = $connect->query("SELECT * FROM `unsubscribed` WHERE email = '$customer_mail'");
		
		if ( !$result_unsubscribed->fetch_array( MYSQLI_ASSOC ) ) {
		  $connect->query( "INSERT INTO unsubscribed ( email ) VALUES ( '$customer_mail' )" );
		  // Delete all jobs from main table
			$connect->query( "DELETE FROM css WHERE mail = '$customer_mail'" );

			echo "You have been unsubscribed";
		}
  }

}

?>