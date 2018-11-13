<?php
	$dsn = "mysql:host=sql7.freemysqlhosting.net:3306;dbname=sql7265123;charset=utf8";
	$opt = array(
	    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
	    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
	);
	$pdo = new PDO($dsn, "sql7265123", "StlgZd6Llj", $opt);
?>
