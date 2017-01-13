<?php
ini_set('display_errors', 1);
require('include/conn.inc.php');

$sUser = $_POST['employeeName'];

$sql = "DELETE FROM loginTable WHERE employeeName= :employeeName";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':employeeName', $sUser, PDO::PARAM_INT);

$stmt->execute();
header('Location: removeUser.php');

?>