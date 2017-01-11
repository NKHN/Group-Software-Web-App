<?php
ini_set('display_errors', 1);
require('include/conn.inc.php');
					$sasset = $_POST['assetTag']; 
					$sName = $_POST['name']; 
					$sManufacturer = $_POST['manufacturer']; 
					$sModel = $_POST['model']; 
					$sSerialNumber = $_POST['serialNumber']; 
					$sPurchaseValue = $_POST['purchaseValue'];
					$sRegistionDate = $_POST['registionDate']; 
					$ModifiedDate = $_POST['modifiedDate']; 
					$LastSeenDate = $_POST['lastSeenDate']; 
					$sOwningCompany = $_POST['owningCompany']; 
					$sOwnerEmployee = $_POST['owningEmployee']; 
					$sLocationBuilding = $_POST['locationBuilding']; 
					$sLocationFloor = $_POST['locationFloor']; 
					$sLocationRoom = $_POST['locationRoom']; 
					$sStatus = $_POST['status']; 
					$sNotes = $_POST['notes'];
// print_r($_POST);
// 					echo $sOwnerEmployee;
// 					exit;

					$sql = "INSERT INTO assetsTable (assetTag, name, manufacturer, model, serialNumber, purchaseValue, registrationDate, modifiedDate, lastSeenDate, owningCompany, owningEmployee, locationBuilding, locationFloor, locationRoom, status, notes) VALUES (:assetTag, :name, :manufacturer, :model, :serialNumber,:purchaseValue, :registionDate, :modifiedDate, :lastSeenDate, :owningCompany, :owningEmployee, :locationBuilding, :locationFloor, :locationRoom, :status, :notes)";

					$stmt = $pdo->prepare($sql);

							$stmt = $pdo->prepare($sql);
							$stmt->bindParam(':assetTag', $sasset, PDO::PARAM_STR);
							$stmt->bindParam(':name', $sName, PDO::PARAM_STR);
							$stmt->bindParam(':manufacturer', $sManufacturer, PDO::PARAM_STR);
							// use PARAM_STR although a number
							$stmt->bindParam(':model', $sModel, PDO::PARAM_STR);
							$stmt->bindParam(':serialNumber', $sSerialNumber, PDO::PARAM_STR);
							$stmt->bindParam(':purchaseValue', $sPurchaseValue, PDO::PARAM_STR);
							$stmt->bindParam(':registionDate', $sRegistionDate, PDO::PARAM_STR);
							$stmt->bindParam(':modifiedDate', $ModifiedDate, PDO::PARAM_STR);
							$stmt->bindParam(':lastSeenDate', $LastSeenDate, PDO::PARAM_STR);
							$stmt->bindParam(':owningCompany', $sOwningCompany, PDO::PARAM_STR);
							$stmt->bindParam(':owningEmployee', $sOwnerEmployee, PDO::PARAM_STR);
							$stmt->bindParam(':locationBuilding', $sLocationBuilding, PDO::PARAM_STR);
							$stmt->bindParam(':locationFloor', $sLocationFloor, PDO::PARAM_STR);
							$stmt->bindParam(':locationRoom', $sLocationRoom, PDO::PARAM_STR);
							$stmt->bindParam(':status', $sStatus, PDO::PARAM_STR);
							$stmt->bindParam(':notes', $sNotes, PDO::PARAM_STR);

					$stmt->execute();

					header('Location: profile.php');
				 ?>