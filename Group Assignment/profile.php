<?php 
ini_set('display errors', 1);
require('include/conn.inc.php');

$username = $_POST['user'];
$password = $_POST['pass'];
?>


<html>
<head>
	<title>Profile Page</title>


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
				<a class="headerButton" id="currentPage" href="profile.html">PROFILE</a>
				<a class="headerButton"  href="searchPage.html">SEARCH</a>
				<a class="headerButton" href="categories.html">CATEGORIES</a>
				<a class="headerButton" href="login.html">LOGIN</a>
			</div>
				<div class="imgClear"></div>
		</header>	


<div class="background">
	<div class="container">

	<div class="textBox">
		<!-- <h1>Profile</h1> -->
		<h1><?php echo("$username"); ?>$</h1>
		<table>
			<th>Asset Tag</th>
			<th>Name</th>
			<th>Manufacturer</th>
			<th>Serial Number</th>

	<?php 
 	$query = "SELECT * FROM assetsTable WHERE owningEmployee = 'Nick Hanson'";
	$stmt = $pdo->query($query);

 	while($row = $stmt -> fetchObject())
	{
// echo " <li> - {$row->assetTag} - {$row->name} </li>";
		echo "<tr>";
		echo "<td>{$row->assetTag} </td>";
		echo "<td>{$row->name} </td>";
		echo "<td>{$row->manufacturer} </td>";
		echo "<td>{$row->model} </td>";
		echo "</tr>";
 	}

  ?>
</table>
	</div>
			
	</div>

	
</div>
		<div id="footer">
			<div class="footerText">
			&copy 2016 3Squared Asset Management<br>
				<a href="profile.html">Profile</a>
				<a href="searchPage.html">Search</a>
				<a href="categories.html">Categories</a>
				<a href="login.html">Login</a>
			</div>
		</div>
	
</body>
</html>