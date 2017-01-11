<?php
    ini_set('display errors', 1);
    require("include/conn.inc.php");
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="shortcut icon" type="text/css" href="Images/icon.png">
</head>

<body>
	<div id="Sign-In">

		<div id="top_banner">
			<img id="logo" src="Images/3squaredlogo.jpg" alt="3Squared Logo">
			<h1>Login</h1>
			<h4 id="asset_manage">ASSET MANAGEMENT</h4>
		</div>

		<div id=form_container>
			<form id='login' action='loginProcess.php' method='post'>
			<fieldset>
					<label for="user">Username</label><br>
					<input type="text" name="user" size="35" placeholder="3Sq001"><br>
					<label for="pass">Password</label><br>
					<input type="password" name="pass" size="35" placeholder="********"><br>
				<input id="button" type="submit" name="submit" value="Log In">
			</fieldset>
			</form>
		</div>
	</div>

	<footer>
		<div class="footerText">
			&copy 2017 3Squared Asset Management<br>
			<a href="profile.php">Profile</a>
			<a href="searchPage.php">Search</a>
			<a href="categories.php">Categories</a>
		</div>
	</footer>
</body>
</html>