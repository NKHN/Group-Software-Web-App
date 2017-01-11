<?php 
	ini_set('display errors', 1);
	require('include/conn.inc.php');
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Samsung Products</title>
</head>
<body>

<h1>Samsung Mobiles Page</h1>

<table>
	<tr>
		<th>Asset Number</th> 
		<th>Name</th>
		<th>Owning Employee</th>
		<th>Model</th>
	</tr>
		<tr>
	<?php 
 	$query = "SELECT * FROM assetsTable WHERE manufacturer = 'Samsung'";
	$stmt = $pdo->query($query);

 	while($row = $stmt -> fetchObject())
	{
// echo " <li> - {$row->assetTag} - {$row->name} </li>";
		echo "<tr>";
		echo "<td>{$row->assetTag} </td>";
		echo "<td>{$row->name} </td>";
		echo "<td>{$row->owningEmployee} </td>";
		echo "<td>{$row->model} </td>";
		echo "</tr>";
 	}

  ?>
</table>
</body>
</html>