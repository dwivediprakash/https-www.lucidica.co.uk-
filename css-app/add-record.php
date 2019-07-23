<?php

if ( strlen( $_GET[ 'contacter' ] ) > 1 && strlen( $_GET[ 'mail' ] ) > 1 && strlen( $_GET[ 'assigned' ] ) > 1 ) {

  include_once 'connect.php';

  $customer = mysqli_real_escape_string( $connect, $_GET[ 'contacter' ] );
  $job = mysqli_real_escape_string( $connect, $_GET[ 'jobTitle' ] );
  $key = md5( date( 'D/m/Y-G:i:s' ) );
  $engineer = mysqli_real_escape_string( $connect, $_GET[ 'assigned' ] );
  $mail = mysqli_real_escape_string( $connect, $_GET[ 'mail' ] );
  $company_name = mysqli_real_escape_string( $connect, $_GET[ 'companyName' ] );
  $account_engineer_email = mysqli_real_escape_string( $connect, $_GET[ 'account_engineer_email' ] );


  $result_unsubscribed = $connect->query( "SELECT * FROM `unsubscribed` WHERE email = '$mail'" );
    
  if ( !$result_unsubscribed->fetch_array( MYSQLI_ASSOC ) ) {
    // Delete later
    $connect->query( "INSERT INTO css( customer, job, keyvalue, engineer, mail, companyname  ) VALUES ( '$customer', '$job', '$key', '$engineer', '$mail', '$company_name' )" );
    $connect->query( "INSERT INTO css1( customer, job, keyvalue, engineer, mail, companyname  ) VALUES ( '$customer', '$job', '$key', '$engineer', '$mail', '$company_name' )" );

    // Enable later Check if there this job in database
    /*$check = $connect->query( "SELECT job FROM css WHERE job = '$job'");
    if ( !$check->fetch_array( MYSQLI_NUM ) ) {
      $connect->query( "INSERT INTO css( customer, job, keyvalue, engineer, mail ) VALUES ( '$customer', '$job', '$key', '$engineer', '$mail' )" );
    }*/
  }

  $connect->close();

} else {

  $to = "Tanya.Semenova@lucidica.com";
  $subject = "Lucidica Feedback";
  $customer = $_GET[ 'contacter' ];
  $mail = $_GET[ 'mail' ];
  $job = $_GET[ 'jobTitle' ];
  $engineer = $_GET[ 'assigned' ];

  $message = "Hello Tanya,<br><br> It looks that there is some problem with Job title for work <b>$job</b>.<br> This job assigned for <b>$engineer</b>.<br> This is customer name: <b>$customer</b><br> Email of customer: <b>$mail</b> Please call to client to ask about CSS.";

  $headers = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=utf-8\r\n";
  $headers .= "From: css@lucidica.com";

  mail( $to, $subject, $message, $headers );

}

?>

<script>
  window.onload = function( ) {
    setTimeout( function( ) {
      window.close( );
    }, 500 );
  }
</script>