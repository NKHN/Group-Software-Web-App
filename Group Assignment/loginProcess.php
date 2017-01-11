<?php 
	ini_set('display_errors', 1);
	require('include/conn.inc.php');
 ?>

<?php 
	
	$username = $_POST['user'];
	$password = $_POST['pass'];



	// $username = stripcslashes($username);
	// $password = stripcslashes($password);
	// $username = mysql_real_escape_string($username);
	// $password = mysql_real_escape_string($password);

	$result = mysql_query("Select username from staffLogin where username= '$username' and password = '$password'")
		or die ("Failed to query database".mysql_error());
	$row - mysql_fetch_array($result);
	if ($row['username'] == $username && $row['password'] == $password)
	{
		echo "Login success. Welcome " . $row['username'];
	}
	else
	{
		echo "Failed to join";
	}

 ?>