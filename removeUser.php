<?php 
ini_set('display errors', 1);
require('include/conn.inc.php');

$username = $_GET['user'];
$password = $_GET['pass'];
?>


<html>
<head>
	<title>Edit Page</title>


	<!-- jQuery library (served from Google) -->
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
		<header> 
			<div id="headerLogo">
				<img src="Images/3Squaredlogo.jpg" width="250px" height="80px">
			</div>
			<div id="headerLinks">
				<a class="headerButton"  href="profile.php">PROFILE</a>
				<a class="headerButton"  href="temp - searchPage.php">SEARCH</a>
				<a class="headerButton"  href="categories1.php">CATEGORIES</a>
				<a class="headerButton" id="currentPage" href="edit123.php">EDIT</a>
				<a class="headerButton" href="login.php">LOGOUT</a>
			</div>
				<div class="imgClear"></div>
		</header>	


<div class="background">
	<div class="container">

		<div class="textbox">
				<form method="POST" action="removeUser.php">
					<h2>Remove user from the login table</h2>
					<h3>Enter the id to be able to remove the item from the database</h3>		
					<input type="text" name="employeeName" placeholder="Employee Name"> <br>
					<input id="button" type="submit" name="submit" value="Remove">
				</form>

			</div>


		</div>
</div>

		<div id="footer">
			<div class="footerText">
			&copy 2016 3Squared Asset Management<br>
				<a href="profile.php">Profile</a>
				<a href="searchPage.php">Search</a>
				<a href="categories.php">Categories</a>
				<a href="login.php">Login</a>
			</div>
		</div>
	
</body>
</html>


















	