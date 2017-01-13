<?php
ini_set('display_errors', 1);
require('include/conn.inc.php');
					
					$sOwnerEmployee = $_POST['employeeName']; 
					$sUsername = $_POST['username']; 
					$sPassword = $_POST['password']; 
					$sAdmin = $_POST['admin']; 

// print_r($_POST);
// 					echo $sOwnerEmployee;
// 					exit;

					$sql = "INSERT INTO loginTable (employeeName, username, password, admin) VALUES (:employeeName, :username, :password, :admin)";

					$stmt = $pdo->prepare($sql);

							$stmt = $pdo->prepare($sql);
							$stmt->bindParam(':employeeName', $sOwnerEmployee, PDO::PARAM_STR);
							$stmt->bindParam(':username', $sUsername, PDO::PARAM_STR);
							$stmt->bindParam(':password', $sPassword, PDO::PARAM_STR);
							$stmt->bindParam(':admin', $sAdmin, PDO::PARAM_STR);

					$stmt->execute();

					header('Location: addUser.php');
				 ?>