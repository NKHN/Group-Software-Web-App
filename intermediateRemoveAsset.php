<?php 
ini_set('display_errors', 1);
require('include/conn.inc.php');

$username = $_GET['user'];
$password = $_GET['pass'];
$assetTag = $_GET['assetTag'];
?>


<html>
<head>
	<title>Edit Page</title>
	<title>Edit Asset Page</title>
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

		<?php 
			if ($num = 0)
			{
				?>
				<h1> No asset by that tag </h1>
			<?php
			}	
		 else
		 {
		 	?>
		 		<div class="textbox">
					<div class="form-group">

				<form method="POST" action="removeProfile.php">
					<h2>Remove item from the database</h2>
					<h3>Enter the asset tag to be able to remove the item from the database</h3>		
					<input type="text" name="assetTag" placeholder="Asset Tag"> <br>
					<input id="button" type="submit" name="submit" value="Remove">
				</form>


			<!-- 	<form method="POST" action="removeProfile.php">
					<h2>Remove item from the database</h2>
					<h3>Enter the asset tag to be able to remove the item from the database</h3>		
					<input type="text" name="assetTag" placeholder="Asset Tag"> <br>
					<input id="button" type="submit" name="submit" value="Remove">
				</form> -->
					</div>
				</div>
				<?php
		 }
		 ?>




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