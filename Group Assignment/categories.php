<?php 
ini_set('display errors', 1);
require('include/conn.inc.php');
$sql = "SELECT name FROM assetsTable where assetTag='3SQA0001'";
$stmt = $pdo->query($sql);
$row = $stmt->fetchObject();
?>

<!DOCTYPE html>
<html>
<head>
<title>Categories Page</title>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function phoneDrop() {
    document.getElementById("phones").classList.toggle("show");
}

function laptopDrop() {
    document.getElementById("laptops").classList.toggle("show");
}

function physicalDrop() {
    document.getElementById("physical").classList.toggle("show");
}

function tabletsDrop() {
    document.getElementById("tablets").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

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
				<a class="headerButton" href="profile.php">PROFILE</a>
				<a class="headerButton" href="searchPage.php">SEARCH</a>
				<a class="headerButton" id="currentPage" href="categories.php">CATEGORIES</a>
				<a class="headerButton" href="login.php">LOGIN</a>
			</div>
				<div class="imgClear"></div>
		</header>	


<div class="background">
	<div class="container">
<!-- 	<?php 
	echo "<h2>$row->name</h2>";
	 ?> -->

</head>
<body>
<!-- <style>

</style> -->
<h2>Clickable Dropdown</h2>
<p>Click on the button to open the dropdown menu.</p>

<div class="dropdown">
<button onclick="phoneDrop()" class="dropbtn">Phones</button>
  <div id="phones" class="dropdown-content">
    <a href="appleTest.php">iPhone</a>
    <a href="samsung.php">Samsung</a>
    <a href="nokia.php">Nokia</a>
  </div>
</div>

<div class="dropdown">
<button onclick="physicalDrop()" class="dropbtn">Physical Resources</button>
  <div id="physical" class="dropdown-content">
    <a href="#Chairs">Chairs</a>		
    <a href="#Tablets">Tables</a>
    <a href="#Printers">Printers</a>
  </div>
</div>

<div class="dropdown">
<button onclick="laptopDrop()" class="dropbtn">Laptops</button>
  <div id="laptops" class="dropdown-content">
    <a href="#Mac">Mac</a>		
    <a href="#HP">HP</a>
    <a href="#ASUS">ASUS</a>
  </div>
</div>

<div class="dropdown">
<button onclick="tabletsDrop()" class="dropbtn">Tablets</button>
  <div id="tablets" class="dropdown-content">
    <a href="#Ipad">Ipad</a>		
    <a href="#Samsung">Samsung</a>
    <a href="#Amazon">Amazon</a>
  </div>
</div>

<div>

</div>
	
</div>
		<div id="footer">
			<div class="footerText">
			&copy 2016 3Squared Asset Management
				<a href="profile.html">Profile</a>
				<a href="searchPage.html">Search</a>
				<a href="categories.html">Categories</a>
				<a href="login.html">Logout</a>
			</div>
		</div>
	
</body>
</html>