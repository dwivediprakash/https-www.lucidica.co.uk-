<?php

include_once 'connect.php';

$job = $_POST[ 'jobTitle' ];
$engineer = $_POST[ 'jobEngineer' ];
$mail = $_POST[ 'customerEmail' ];
$company = $_POST[ 'customerCompany' ];
$customer = explode(':', $job)[0];
$key = md5( date( 'D/m/Y-G:i:s' ) );
  
$connect->query( "INSERT INTO `css` ( `job`, `customer`, `keyvalue`, `mail`, `engineer`, `companyname`) VALUES ('$job', '$customer', '$key', '$mail', '$engineer', '$company' )" );

?>