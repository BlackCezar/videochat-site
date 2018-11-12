<?php
	include("FTS_DB.php");

	$name = trim($_POST['td_1']);
	$address = trim($_POST['td_2']);
	$gps_1 = trim($_POST['td_3']);
	$gps_2 = trim($_POST['td_4']);
	//$phone = trim($_POST['td_5']);
/*
	$sql = "INSERT INTO obrazov_org (name, address, gps_1, gps_2) VALUES (:name, :address, :gps_1, :gps_2)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':address', $address);
    $stmt->bindValue(':gps_1', $gps_1);
    $stmt->bindValue(':gps_2', $gps_2);
    $stmt->execute();*/

    echo "ok";
?>