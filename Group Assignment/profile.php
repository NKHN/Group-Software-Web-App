<?php 
ini_set('display errors', 1);
require('include/conn.inc.php');

$username = $_GET['user'];
$password = $_GET['pass'];
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
				<a class="headerButton" id="currentPage" href="profile.php">PROFILE</a>
				<a class="headerButton"  href="searchPage.php">SEARCH</a>
				<a class="headerButton" href="categories.php">CATEGORIES</a>
				<a class="headerButton" href="login.php">LOGIN</a>
			</div>
				<div class="imgClear"></div>
		</header>	


<div class="background">
	<div class="container">

	<div class="textBox">
		<!-- <h1>Profile</h1> -->
		<h1><?php echo("<h2>$username</h2>"); ?>$</h1>
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
			
			<div class="textbox">
				<form method="POST">
					<label for="editing">Edit details</label>
					<input type="text" name="edit" placeholder="Asset Tag">
					<input id="button" type="submit" name="submit" id="edit" value="Edit">
				</form>

				<?php 
					$editAssetTag = $_POST['edit'];
					echo"<h2>$editAssetTag</h2>";
				 ?>

			</div>
			<div class="textbox">
				<form method="POST" action="updateProfile.php">
					<input type="hidden" name="editAssetTag" value="<?php echo $editAssetTag;?>">
					<label for="nameedit">Name</label>
					<input type="text" name="nameedit" id="nameedit" size="35" placeholder="Name"><br>
					<label for="manufacturer"></label>
					<input type="text" name="manuedit" size="35" placeholder="Manufacturer"><br>
					<label for="lastSeenEdit"></label>
					<input type="date" name="lastSeenEdit" size="35"><br>
					<label for="employeeEdit"></label>
					<input type="text" name="employeeEdit" size="35" placeholder="Employee Name"><br>
					<label for="locBuildEdit"></label>
					<input type="text" name="locBuildEdit" size="35" placeholder="Building"><br>
					<input id="button" type="submit" name="submit" value="Edit">
				</form>

				
			</div>


			<div class="textbox">
				<h2>Adding items to the database</h2>
				<form method="POST" action="addToProfile.php">

					<label for="AssetTag">Asset Tag</label>
					<input type="text" name="assetTag" placeholder="Asset Tag"><br>

					<label for="name">Name</label>
					<input type="text" name="name" id="name" size="35" placeholder="Name"><br>

					<label for="description">Description</label>
					<input type="textarea" name="description"  id="description" size="35" placeholder="Decription"><br>

					<label for="manufacturer">Manufacturer</label>
					<input type="text" name="manufacturer" size="35" placeholder="Manufacturer"><br>

					<label for="model">Model</label>
					<input type="text" name="model" size="35" placeholder="Model"><br>

					<label for="serialNumber">Serial Number</label>
					<input type="textarea" name="serialNumber" size="35" placeholder="Serial Number"><br>

					<label for="purhcaseValue">Purchase Value</label>
					<input type="textarea" name="purchaseValue" size="35" placeholder="Purchase Value"><br>

					<label for="registionDate">Registered Date</label>
					<input type="date" name="registionDate" size="35"><br>

					<label for="modifiedDate">Modified Date</label>
					<input type="date" name="modifiedDate" size="35"><br>

					<label for="lastSeenEdit">Last Seen Date</label>
					<input type="date" name="lastSeenDate" size="35"><br>

					<label for="owningCompany">Owning Company</label>
					<input type="text" name="owningCompany" size="35" placeholder="Owning Company"><br>

					<label for="owningEmployee">Owner Employee</label>
					<input type="text" name="owningEmployee" size="35" placeholder="Owner Employee"><br>

					<label for="locationBuilding">Building</label>
					<input type="text" name="locationBuilding" size="35" placeholder="Building"><br>

					<label for="locationFloor">Floor</label>
					<input type="text" name="locationFloor" size="35" placeholder="Floor"><br>

					<label for="locationRoom">Location in Room</label>
					<input type="text" name="locationRoom" size="35" placeholder="Location in Room"><br>

					<label for="status">Status</label>
					<input type="text" name="status" size="35" placeholder="Status"><br>

					<label for="notes">Notes</label>
					<input type="textarea" name="notes" size="35" placeholder="Notes"><br>

					<input id="button" type="submit" name="submit" value="Add">

				</form>

			</div>


			<div class="textbox">
				<form method="POST" action="removeProfile.php">
					<h2>Remove item from the database</h2>
					<h3>Enter the asset tag to be able to remove the item from the database</h3>		
					<input type="text" name="assetTag" placeholder="Asset Tag"> <br>
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