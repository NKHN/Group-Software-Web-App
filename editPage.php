<?php
ini_set('display errors', 1);
require('include/conn.inc.php');

$username = $_GET['user'];
$password = $_GET['pass'];
?>


<html>
<head>
	<title>Edit Asset Page</title>
	<head>
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
	<h2>EDIT DETAILS</h2>
	<h3>Enter the asset tag into the field below and press the button to confirm <br> and then complete the rest of the form</h3>

	<form method="POST">
		<div class="form-group">
			<label for="assetTag1">Edit details</label>
			<input type="text" name="edit" placeholder="Asset Tag" id="assetTag1">
			<input id="button" type="submit" name="submit" id="edit" value="Edit">
		</div>
	</form>
	<?php
		$editAssetTag = $_POST['edit'];
		echo"<h2>$editAssetTag</h2>";
	?>
	<div class="form-group">
		<form method="POST" action="updateProfile.php">
					<input type="hidden" name="editAssetTag" value="<?php echo $editAssetTag;?>">
					<label for="nameedit">Name</label>
					<input type="text" name="nameedit" id="nameedit" size="35" placeholder="Name"><br>
					<label for="catedit">Category</label>
					<input type="text" name="catedit" id="catedit" size="35" placeholder="Name"><br>
					<label for="manuedit">Manufacturer</label>
					<input type="text" name="manuedit" id="manuedit" size="35" placeholder="Manufacturer"><br>
					<label for="lastSeenEdit">Last Seen</label>
					<input type="date" name="lastSeenEdit" id="lastSeenEdit" size="35"><br>
					<label for="employeeEdit">Employee Name</label>
					<input type="text" name="employeeEdit" id="employeeEdit" size="35" placeholder="Employee Name"><br>
					<label for="locBuildEdit">Location Building</label>
					<input type="text" name="locBuildEdit" id="locBuildEdit" size="35" placeholder="Building"><br>
					<input id="button" type="submit" name="submit" value="Edit" align="center">
				</form>
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
