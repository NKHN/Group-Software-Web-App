<?php 
ini_set('display errors', 1);
require('include/conn.inc.php');

$username = $_GET['user'];
$password = $_GET['pass'];
?>


<html>
<head>
	<title>Profile Page</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" type="image/x-icon" href="Images/icon.ico">
	<title>iPhone</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<!-- bxSlider Javascript file -->
<script src="/js/jquery.bxslider.min.js"></script>
<!-- bxSlider CSS file -->
<link href="/lib/jquery.bxslider.css" rel="stylesheet" />
<link href="css/bootstrap.min.css" rel="css/custom.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="utf-8">
	<script src="Javascript/Javascript.js" type="text/javascript"></script>
</head>
<body>
		<header class="header">
		<img id="logo" src="Images/3squaredlogo.jpg" alt="3Squared Logo">
		<nav class="navbar navbar-default">
		<div class="container" id="nav-container">
			<div class="navbar-header">
				<button type="button"
				class="navbar-toggle collapsed"
				data-toggle="collapse"
				data-target="#collapsemenu">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="collapsemenu">
				<ul class="navbar-nav nav">
					<li><a class="headerButton" href="profile.php">PROFILE</a></li>
					<li><a class="headerButton" id="currentPage" href="editPage.php">EDIT ASSETS</a></li>
					<li><a class="headerButton" href="searchPage">SEARCH</a></li>
					<li><a class="headerButton" href="categories.php">CATEGORIES</a></li>
					<li><a class="headerButton" href="login.php">LOGOUT</a></li>
				</ul>
			</div>
		</div>
	</nav>
		<div class="imgClear"></div>
	</header>


	<div class="container-fluid">
	

			<div class="textbox">
				<h2>Adding items to the database</h2>
			<div class="form-group">
				<form method="POST" action="addToUser.php">

					<label for="employeeName">Employee Name</label>
					<input type="text" name="employeeName" id="employeeName" size="35" placeholder="Name"><br>

					<label for="username">Username</label>
					<input type="text" name="username" id="username" size="35" placeholder="Username"><br>

					<label for="password">Password</label>
					<input type="textarea" name="password"  id="password" size="35" placeholder="Password"><br>

					<label for="password">Admin</label>
					<input type="textarea" name="admin"  id="admin" size="35" placeholder="Admin (1 or 0)"><br>

					<input id="button" type="submit" name="submit" value="Add">

				</form>
			</div>
			</div>

		</div>

		<footer class="footer">
			<div class="footerText">
			&copy; 2017 3Squared Asset Management<br>
				<a href="profile.php">Profile</a>
				<a href="searchPage.php">Search</a>
				<a href="categories.php">Categories</a>
				<a href="login.php">Login</a>
			</div>
		</footer>
	
</body>
</html>