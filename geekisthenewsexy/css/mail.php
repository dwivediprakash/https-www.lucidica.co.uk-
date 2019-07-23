<?php
$position = trim($_POST["position"]);
$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$phone = trim($_POST["phone"]);
$area = trim($_POST["area"]);

$message = "Vacancy: $position \nName: $name \nEmail: $email \nPhone: $phone \nWhy are you applying for this position?: \n\n$area";
$message_html = "<p>Vacancy: $position</p> <p>Name: $name</p> <p>Email: $email</p> <p>Phone: $phone</p> <p>Why are you applying for this position?: $area</p>";
?>


<?php
require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

// $mail->isSMTP();
// $mail->Host = 'smtp.yandex.ru';
// $mail->SMTPAuth = true;
// $mail->Username = '380977087503'; 
// $mail->Password = 'juniorvisa5338'; 
// $mail->SMTPSEcure = 'ssl'; 
// $mail->Port = '465';

$mail->CharSet="utf-8";
$mail->From = '380977087503@yandex.ua';
$mail->FromName = '';
$mail->addAddress('geekisthenewsexy@lucidica.com');

$mail->isHTML(true);

$mail->Subject = 'Lending page application';
$mail->Body = $message_html;
$mail->AltBody = $message;


if (isset($_FILES["attach_file"])) {
    $mail->AddAttachment($_FILES['attach_file']['tmp_name'], $_FILES['attach_file']['name']);
}
?>


<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Заголовок</title>
	<meta name="description" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="favicon.png" />
	<link rel="stylesheet" href="libs/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="css/fonts.css" />
	<style>
		body,
		html {
			height: 100%;
			overflow: visible;
			margin: 0;
			padding: 0;
		}
		.sec1 {
			height: 100%;
			background-color: #00e5b0;
			background-image: url(../img1/section1-bg.jpg);
			-webkit-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
		.subtitle {
			padding-left: 28px;
			color: white;
			font-family: GothamHTF;
			font-size: 19px;
			font-weight: 300;
			line-height: 18px;
			text-transform: uppercase;
			text-align: center;
			margin-top: 0;

		}
		.subtitle .bold {
			padding-top: 50px;
			margin-left: 3px;
			display: inline-block;
			width: 113px;
			height: 14px;
			background-image: url(../img/lucidica_mini_logo.png);
			background-repeat: no-repeat;
			background-position: left bottom;
		}
		.title {
			width: 493px;
			height: 135px;
			background-color: black;
			margin-left: auto;
			margin-right: auto;
			margin-top: 61px;
			text-align: center;
			padding-top: 23px;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
			color: white;
			font-family: GrouchITCbyBT;
			font-size: 32px;
			font-weight: 400;
			letter-spacing: -1px;
		}
		.glasses {
			width: 272px;
			height: 102px;
			margin-top: 42px;
			background-image: url(../img1/serction1-glasses.png);
			margin-left: auto;
			margin-right: auto;
			margin-top: 40px;
		}

		.we_currently {
			margin-left: auto;
			margin-right: auto;
			width: 800px;
			padding-top: 23px;
			color: black;
			font-family: GrouchITCbyBT;
			font-size: 34px;
			font-weight: 400;
			text-align: center;
			line-height: 45px;
			letter-spacing: -1px;
			line-height: 48px;
		}
	</style>
</head>
<body>
	<div class="sec1" id="sec1">
		<h3 class="subtitle">A Public service annoucement BY <span class="bold"></span> - the I.T. department for small business</h3>
		<div class="glasses"></div>
		<h1 class="title">
			<?php if ( $mail->send() ){
				echo 'a letter has been already sent';
			}
			else {
				echo 'The email could not be sent. ';
				echo 'Error: ' . $mail->ErrorInfo;
			}
			?>
		</h1>
		<p class="we_currently">
			You will be redirected to the homepage via <span class="seconds">10</span> seconds
		</p>
	</div>

	<!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->
	<script src="libs/jquery/jquery-1.11.1.min.js"></script>
	<script>
		
		var i = 10;
		setInterval(function() {
			i--;
			$(".seconds").html(i);
		}, 1000);

		function redirect() {
			window.location.href = "/";
		}
		setTimeout(redirect, 10000)
		
		
	</script>
	<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
	<!-- Google Analytics counter --><!-- /Google Analytics counter -->
</body>
</html>