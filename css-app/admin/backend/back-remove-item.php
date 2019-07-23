<?php

include_once 'connect.php';

$id = $_POST[ 'id' ];

$connect->query( "DELETE FROM `css` WHERE `id` = $id" );

?>