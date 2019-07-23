<?php
	session_start();

	if ( isset( $_POST[ 'login' ] ) ) {
		$login = $_POST[ 'login' ];
		if ( $login == '') {
			unset( $login );
		}
	}

	if ( isset( $_POST[ 'password' ] ) ) {
		$password = $_POST[ 'password' ];
		if ( $password =='') {
			unset( $password );
		}
	}

	if ( empty( $login ) && empty( $password ) && strlen( $login ) < 7 && strlen( $password ) < 12  )  {
    exit ( 'Please write your login and pass' );
  }
	
  include_once ( 'backend/connect.php' );

  $login = stripslashes( htmlspecialchars( trim( mysqli_escape_string( $connect, $login ) ) ) );
	$password = stripslashes( htmlspecialchars( trim( mysqli_escape_string( $connect, $password ) ) ) );

	$result = $connect->query( "SELECT * FROM users WHERE login='$login'" );
  $myrow = $result->fetch_array(MYSQLI_ASSOC);

  if ( empty( $myrow[ 'password' ] ) ) {
    exit ( 'Login or pass is wrong.' );
  } else {
		
    if ( $myrow[ 'password' ] == md5( $password ) ) {
    	$_SESSION[ 'login' ] = $myrow[ 'login' ]; 
    	$_SESSION[ 'id' ] = $myrow[ 'id' ];
    	header( 'Location: index.php' );
    } else {
    	exit ( 'Login or pass is wrong.' );
    }
  }

?>