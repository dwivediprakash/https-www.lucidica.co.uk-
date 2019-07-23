<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>CSS app</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.5/angular.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.5/angular-route.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="style.css">
		<script src="js/app.js"></script>
	</head>
	<body ng-app="css-app">

		<?php if ( empty( $_SESSION['login'] ) or empty( $_SESSION['id'] ) ) { ?>

    <img id="logo" src="lucidica-logo.svg" alt="lucidica logo">
		<h1 class="main-heading">CSS app admin panel</h1>
    <form id="login-form" class="form-inline" action="login.php" method="post">
  		<div class="form-group">
  		  <label>Login</label>
  		  <input class="form-control" name="login" type="text" size="15" maxlength="15" autocomplete="off" placeholder="Login">
  		</div>
  		<div class="form-group">
  		  <label>Password</label>
  		  <input class="form-control" name="password" type="password" size="15" maxlength="15" autocomplete="off" placeholder="Password">
  		</div>
    	<button class="btn btn-default" type="submit" name="submit">Submit</button>
		</form>

		<?php } else { ?>

		<nav class="navbar navbar-default" role="navigation">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#/">CSS app</a>
		    </div>
		
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li><a ng-click="addActiveClass( '#/' );" href="#/">Current week</a></li>
		        <li><a ng-click="addActiveClass( '#/prev' );" href="#/prev">Previous week</a></li>
		        <li><a ng-click="addActiveClass( '#/old' );" href="#/old">Older information</a></li>
		      </ul>
		    </div>
		  </div>
		</nav>

		<div ng-view></div>

		<?php } ?>

	</body>
</html>