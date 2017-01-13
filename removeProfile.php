<?php
ini_set('display_errors', 1);
require('include/conn.inc.php');


$sasset = $_POST['assetTag'];
$sAssetTag = $_POST['assetTag'];


$sql = "DELETE FROM assetsTable WHERE assetTag = :assetTag";


$stmt = $pdo->prepare($sql);
$stmt->bindParam(':assetTag', $sAssetTag, PDO::PARAM_INT);

$stmt->execute();
header('Location: removeProfile.php');

?>