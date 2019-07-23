<?php

$connect = new mysqli( 'localhost', 'lucidica_css', 'p9T3}dTR55%)9)', 'lucidica_css' );

if ( $connect->connect_error ) {
  $connect = new mysqli( 'localhost', 'root', '', 'css' );
}

$connect->query( 'SET NAMES utf8' );

?>