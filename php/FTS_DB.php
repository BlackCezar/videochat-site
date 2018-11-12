<?php
	$dsn = "mysql:host=185.84.108.16;dbname=b174420_test;charset=utf8";
	$opt = array(
	    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
	    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
	);
	$pdo = new PDO($dsn, "u174420", "741852963a", $opt);
?>