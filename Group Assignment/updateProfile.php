<?php
ini_set('display_errors', 1);
require('include/conn.inc.php');
					$sName = $_POST['nameedit']; 
					$sManufacturer = $_POST['manuedit']; 
					$sLastSeen = $_POST['lastSeenEdit']; 
					$sEmployee = $_POST['employeeEdit']; 
					$sLocationBuilding = $_POST['locBuildEdit'];
					$sEditAssetTag = $_POST['editAssetTag']; 

					$sql = "UPDATE assetsTable SET Name = :nameedit,
											  	   Manufacturer= :manuedit,
											       lastSeenDate = :lastSeenEdit,
											       owningEmployee = :employeeEdit,
											       	locationBuilding = :locBuildEdit
							WHERE assetTag = :editAssetTag";

							$stmt = $pdo->prepare($sql);
							$stmt->bindParam(':nameedit', $sName, PDO::PARAM_STR);
							$stmt->bindParam(':manuedit', $sManufacturer, PDO::PARAM_STR);
							$stmt->bindParam(':lastSeenEdit', $sLastSeen, PDO::PARAM_STR);
							// use PARAM_STR although a number
							$stmt->bindParam(':employeeEdit', $sEmployee, PDO::PARAM_STR);
							$stmt->bindParam(':locBuildEdit', $sLocationBuilding, PDO::PARAM_INT);
							$stmt->bindParam(':editAssetTag', $sEditAssetTag, PDO::PARAM_STR);

					$stmt->execute();
					header('Location: profile.php');
				 ?>