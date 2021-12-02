<?php

require_once "config.php";

$conn = new mysqli($hn,$un,$pw,$db);

session_start();
$user = $_SESSION['user'];
$location = $_POST['location'];

$pokemon1 = $_POST['pokemon1'];
$pokemon1lvl = $_POST['p1level'];
$pokemon1comment = $_POST['p1c'];

$pokemon2 = $_POST['pokemon2'];
$pokemon2lvl = $_POST['p2level'];
$pokemon2comment = $_POST['p2c'];

$pokemon3 = $_POST['pokemon3'];
$pokemon3lvl = $_POST['p3level'];
$pokemon3comment = $_POST['p3c'];

$pokemon4 = $_POST['pokemon4'];
$pokemon4lvl = $_POST['p4level'];
$pokemon4comment = $_POST['p4c'];

$pokemon5 = $_POST['pokemon5'];
$pokemon5lvl = $_POST['p5level'];
$pokemon5comment = $_POST['p5c'];

$pokemon6 = $_POST['pokemon6'];
$pokemon6lvl = $_POST['p6level'];
$pokemon6comment = $_POST['p6c'];

$goalmon1 = $_POST['goalmon1'];
$goalmon2 = $_POST['goalmon2'];
$goalmon3 = $_POST['goalmon3'];
$goalmon4 = $_POST['goalmon4'];
$goalmon5 = $_POST['goalmon5'];
$goalmon6 = $_POST['goalmon6'];

$stmt = $conn->prepare("UPDATE Trainers SET location=?, pokemon1=?, p1level=?, p1c=?, pokemon2=?, p2level=?, p2c=?, pokemon3=?, p3level=?, p3c=?, pokemon4=?, p4level=?, p4c=?, pokemon5=?, p5level=?, p5c=?, pokemon6=?, p6level=?, p6c=?, fp1=?, fp2=?, fp3=?, fp4=?, fp5=?, fp6=? WHERE trainername='$user'");

$stmt->bind_param('sssssssssssssssssssssssss', $location, $pokemon1, $pokemon1lvl, $pokemon1comment, $pokemon2, $pokemon2lvl, $pokemon2comment, $pokemon3, $pokemon3lvl, $pokemon3comment, $pokemon4, $pokemon4lvl, $pokemon4comment, $pokemon5, $pokemon5lvl, $pokemon5comment, $pokemon6, $pokemon6lvl, $pokemon6comment, $goalmon1, $goalmon2, $goalmon3, $goalmon4, $goalmon5, $goalmon6);

$stmt->execute();
$stmt->close();

header("Location: ../");

?>