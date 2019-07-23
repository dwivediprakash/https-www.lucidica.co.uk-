<?php
  /*
    This script is part of XMAS Season template page.
    This script has been created especially for this template and shall not be used or sold
    in other places then envato market as a part of XMAS Season template page.
    Author: Tomas Dostal - webakery.asia
  */

// E-mail subscribing function
  if ($_POST["send"]) {
    if (check_email($_POST["email"])) {
      // ===== THIS IS WHERE YOUR SCRIPT FOR SAVING EMAIL ADDRESS SHOULD BE ===== //

      // ===== THIS IS WHERE YOUR SCRIPT FOR SAVING EMAIL ADDRESS SHOULD BE ===== //

//      echo "You have been subscribed!";
//      $clientEmail = $_POST["email"];
//      echo "From:"; echo $clientEmail;
      $headers = "From: marketing@lucidica.com\r\n";
      $headers .= "Reply-To: noreply.webakery.asia\r\n";
      $headers .= "Return-Path: noreply.webakery.asia\r\n";

      $message = "Hello!\r\n";
//      $message .= "Christmas are almost here and we will have a lot of amazing offers!\r\n";
      $message .= "By subscribing you agree that we will send you our special offers.\r\n\r\n\r\n";
//      $message .= "Thank you and Regards from XMAS Season webpage template,\r\n";
      $message .= "Best regards form Lucidica";

      mail($_POST["email"], "You have been subscribed to our deals newsletter!", $message, $headers);
//marketing
      $headers2 = "From: marketing@lucidica.com\r\n";
      $headers2 .= "Reply-To: marketing@lucidica.com\r\n";
      $headers2 .= "Return-Path: marketing@lucidica.com.asia\r\n";
      $message2 = "Hello!\r\n";
      $message2 .= "By subscribing you agree that we will send you our special offers.\r\n\r\n\r\n";
      $message2 .= "By subscribing you agree that we will send you our special offers.\r\n\r\n\r\n";
      echo "<a href='https://www.lucidica.co.uk/privacy/'>See our privacy policy</a>";
      $message2 .= "Best regards, Lucidica.\r\n\r\n\r\n";
    }
    mail("marketing@lucidica.com", "New subscriber from special deals!", $message2, $headers2);
  }

  function check_email($email)
  {
    // Rule to check if email is valid
    $regexp = '/^[^\x00-\x20()<>@,;:\\".[\]\x7f-\xff]+(?:\.[^\x00-\x20()<>@,;:\\".[\]\x7f-\xff]+)*\@[^\x00-\x20()<>@,;:\\".[\]\x7f-\xff]+(?:\.[^\x00-\x20()<>@,;:\\".[\]\x7f-\xff]+)+$/i';
    return preg_match($regexp, $email);
  }