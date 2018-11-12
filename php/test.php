<?php
	include("FTS_DB.php");
	$ADVOKATS = $pdo->prepare('SELECT * FROM advokats ORDER BY name ASC');
	$ADVOKATS->execute();
	$ADVOKATSX = $ADVOKATS->fetchAll();
	foreach ($ADVOKATSX as $ADVOKAT){
		if($ADVOKAT['id'] != 0){

			$name = strip_tags($ADVOKAT['name']);

			$sql = "UPDATE advokats SET name = :name WHERE id = :id";
		    $stmt = $pdo->prepare($sql);
		    $stmt->bindValue(':id', $ADVOKAT['id']);
		    $stmt->bindValue(':name', $name);
		    $stmt->execute();
		}
	}
?>