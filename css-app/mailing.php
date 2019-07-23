<?php

include_once 'connect.php';

// Send all customers one email every week from last week with link for evaluation page

$result = $connect->query( "SELECT * FROM `css` WHERE YEAR(`timestamp`) = YEAR(NOW()) AND WEEK(`timestamp`, 1) = WEEK(NOW(), 1) - 1" );

$dataRow = Array();
$p = 0;

while( $rs = $result->fetch_array( MYSQLI_ASSOC ) ) {

  if ( !in_array( $rs[ 'mail' ], $dataRow ) ) {
    $dataRow[$p] = $rs[ 'mail' ];
    $p++;

    $to = $rs[ 'mail' ];
    /*$to = 'sharp131996@gmail.com';*/
  
    $subject = "How did we do?";
  
    $customer = explode( " ", $rs[ 'customer' ] )[0];
    $job = $rs[ 'job' ];
    $engineer = $rs[ 'engineer' ];
    $key = $rs[ 'keyvalue' ];

    /* Test quantity of emails */
    /*echo $p .' '. $job .' '. $rs[ 'id' ] .'<br>';*/
  
    $message = "Hello $customer.<br><br>Here at Lucidica, your happiness is our priority. That is why we are constantly trying to improve our customer service and make sure our clients are satisfied with our services. Please could you take a minute out of your day to give us some feedback on your recently closed jobs. <br><br> <a href='http://www.lucidica.com/css-app/index.php?key=$key' target='_blank' style='font-size: 14pt; color: #fe0000;'>Click to go to survey</a><br><br><a href='http://www.lucidica.com/css-app/unsubscribed.php?key=$key' target='_blank'>Click to unsubscribe</a><br><br> <strong><span style='color: #61a4d7;'>Lucidica Support</span> </strong><br><em><span style='color: #61a4d7;'>, Lucidica</span></em>";

    $message2 = "<p style='width: 100%;'>Hello $customer,<br><br> We’d love it if you could take 30 seconds to help us gather some important feedback for our team. We are always aiming improve our customer experience and make sure all of our clients are happy with the service we are providing, so we’d like to ask you 2 questions about how your recent job was resolved and what you really think of us!<br><br>

		<p style='text-align: center; width: 100%;'><a href='http://www.lucidica.com/css-app/index.php?key=$key' target='_blank' style='font-size: 14pt;'>Give feedback</a></p><br>

		We will mix things up when it comes to asking you for your opinion with either a phone call or email. If you ever want to give us feedback without being asked you can call 0844 414 2994 and speak to one of our friendly team.<br><br>

		If you would prefer not to receive these emails please unsubscribe <a href='http://www.lucidica.com/css-app/unsubscribed.php?key=$key' target='_blank' style='text-transform: none;'>here</a></p>";

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: Tanya Semenova Tanya.Semenova@lucidica.com";

    if ( $rs[ 'sent' ] != 'sent' ) {
    	mail( $to, $subject, $message2, $headers );
    	$connect->query( "UPDATE `css` SET `sent` = 'sent' WHERE `id` = '". $rs[ 'id' ] ."'" );
    }

  }

}

?>