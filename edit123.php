<?php
session_start();
ini_set('display_errors', 1);
require('include/conn.inc.php');

?>
		<html>
		<head>
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
			if($_SESSION['admin'] == 1)
			{
				?>
					<div class="background">
						<div class="textbox">
							<h2>Editing Page</h2>
							<h3>Choose from the options below</h3>
							<hr>
							<a href="editPage.php">Edit Asset</a>
							<hr>
							<a href="addPage.php">Add Asset</a>
							<hr>
							<a href="removePage.php">Remove Asset</a>
							<hr>
							<a href="addUser.php">Add User</a>


						</div>
					</div>

				<?php
			}
			else
			{
				?>
					<div class="background">
						<div class="textbox">
							<h2>You are not an admin, so you cannot change any asset data</h2>
							<br><a href="profile.php">Back to profile</a>
						</div>
					</div>
				<?php
			}
			?>

			</div>


		</body>
		</html>

<?php print_r($_SESSION); ?>
