<?php

$message = htmlspecialchars( trim( $_POST[ 'message' ] ) );

$name = $_POST['name'];
$email = $_POST['email'];
$position = $_POST['position'];
$message = $_POST['hiddenmessage'];

	$to = "sharp131996@gmail.com";

	$subject = "Feedback form";

	$message = "Привет, Вам оставил сообщение <b>$name</b><br> Текст сообщения: $message.<br>Email: $email<br>Номер телефона: $tel";

	$headers= "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";
	$headers .= "From: Feedback Reminder <$email>";

	mail($to, $subject, $message, $headers);

?>