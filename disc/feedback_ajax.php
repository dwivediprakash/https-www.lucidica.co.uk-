<?php

$name = $_POST['name'];
$email = $_POST['email'];
$position = $_POST['position'];
$message = $_POST['message'];

	$to = "geekisthenewsexy@lucidica.com";

	$subject = "Feedback form";

	$message = "Hello, <b>$name</b> send a message for you.<br> Message text: $message.<br>Email: $email<br>Position: $position";

	$headers= "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";
	$headers .= "From: Feedback Reminder <$email>";

	mail($to, $subject, $message, $headers);
	
?>