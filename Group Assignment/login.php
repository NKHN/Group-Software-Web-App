<?php
 -session_start();
 -include('include/conn.inc.php');
 -$username = $_POST['username'];
 -$password = $_POST['password'];
 +    ini_set('display errors', 1);
 +    require("GSDP/include/conn.inc.php");
 +?>
  
 -if($username&&$password)
 -{
 -	$sql = "SELECT * FROM loginTable WHERE username= :username AND password = :password";
 -	$stmt = $pdo->prepare($sql);
 -	$stmt->bindParam(':username', $username, PDO::PARAM_STR);
 -	$stmt->bindParam(':password', $password, PDO::PARAM_STR);
 -    $stmt->execute();
 -	$numrows = $stmt->rowCount();
 +<!DOCTYPE HTML>
 +<html>
 +<head>
 +	<title>Login</title>
 +	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 +	<link rel="stylesheet" type="text/css" href="css/login.css">
 +	<link rel="shortcut icon" type="text/css" href="Images/icon.png">
 +</head>
  
 -	if($numrows===1){
 -			echo "Success";
 -			$_SESSION['login'] = 1;
 -		}else{
 -			echo "Your username/password is incorrect!";
 -		}
 -}
 -?> 
 +<body>
 +	<div id="Sign-In">
 +
 +		<div id="top_banner">
 +			<img id="logo" src="Images/3squaredlogo.jpg" alt="3Squared Logo">
 +			<h1>Login</h1>
 +			<h2 id="asset_manage">ASSET MANAGEMENT</h2>
 +			<div class="passError"> <?php echo $passError ?> </div>
 +
 +		<div id=form_container>
 +			<form id='login' method='post' action='loginLogic.php'>
 +			<fieldset>
 +					<span> </span>
 +					<label for="user">Username</label><br>
 +					<input type="text" name="user" size="35" placeholder="Please enter your username..."><br>
 +					<label for="pass">Password</label><br>
 +					<input type="password" name="pass" size="35" placeholder="Please enter your password..."><br>
 +				<input id="button" type="submit" name="submit" value="Log In">
 +			</fieldset>
 +			</form>
 +		</div>
 +	</div>
 +
 +	<footer>
 +		<div class="footerText">
 +			&copy 2017 3Squared Asset Management<br>
 +			<a href="profile.php">Profile</a>
 +			<a href="searchPage.php">Search</a>
 +			<a href="categories.php">Categories</a>
 +		</div>
 +	</footer>
 +</body>
 +</html> 