<?php
ini_set('display_errors', 1);
require('include/conn.inc.php');


// $sasset = $_POST['assetTag'];
$sAssetTag = $_POST['assetTag'];


$sql = "SELECT * FROM assetsTable WHERE assetTag = :assetTag";
$stmt = $pdo->prepare($sql);
$stmt->bindParam('assetTag', $sAssetTag, PDO::PARAM_INT);
$stmt->execute();
$rowCount = $stmt->rowcount();
$row = $stmt->fetchObject();
if($rowCount == 0)
{
	$msg = "Doesnt exist";

	header('Location: removeFailure.php');
	exit();
}
else{
	echo "Exists";	
	$id = $row->assetTag;
	$sql = "DELETE FROM assetsTable WHERE assetTag = :assetTag";
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam('assetTag', $id, PDO::PARAM_INT);
	$stmt->execute();
	header('Location: removeSucceed.php');
	exit();
}




?>