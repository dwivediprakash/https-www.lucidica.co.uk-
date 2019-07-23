<?php

	$name = htmlspecialchars( trim( $_POST['name'] ) );
	$lname = htmlspecialchars( trim( $_POST['lname'] ) );
	$email = htmlspecialchars( trim( $_POST['email'] ) );
	$subj = htmlspecialchars( trim( $_POST['subj'] ) );
	$message = htmlspecialchars( trim( $_POST['message'] ) );

	$to = "sharp131996@gmail.com";

	$subject = $subj;

	$message = "Hello, user <b>$name $lname</b> has left message: $message.<br>User email: $email";

	$headers= "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";

	mail($to, $subject, $message, $headers);

?>