<?php
	include("FTS_DB.php");
	if($_POST['Search'] != null){
		$ADVOKATS = $pdo->prepare('SELECT * FROM advokats_org WHERE name LIKE :name OR director LIKE :director ORDER BY name ASC');
		$ADVOKATS->bindValue(':name', "%".$_POST['Search']."%");
		$ADVOKATS->bindValue(':director', "%".$_POST['Search']."%");
	}
	else{
		$ADVOKATS = $pdo->prepare('SELECT * FROM advokats_org ORDER BY name ASC');
	}
	$ADVOKATS->execute();
	$ADVOKATSX = $ADVOKATS->fetchAll();
	$counter = 0;

	echo "<div class='item main'>
			<div class='name'>
				<span>Организация</span>
			</div>
			<div class='form'>
				<span>Форма</span>
			</div>
			<div class='contacts'>
				<span>Контакты</span>
			</div>
			<div class='director'>
				<span>Руководитель</span>
			</div>
			<div class='clear'></div>
		</div>";

	foreach ($ADVOKATSX as $ADVOKAT){
		if($ADVOKAT['id'] != 0){
			echo "
			<div class='item item'>
				<div class='name'>
					<span>".strip_tags($ADVOKAT['name'])."</span>
				</div>
				<div class='form'>
					<span>".$ADVOKAT['form']."</span>
				</div>
				<div class='contacts'>
					<span>".$ADVOKAT['contacts']."</span>
				</div>
				<div class='director'>
					<span>".$ADVOKAT['director']."</span>
				</div>
				<div class='clear'></div>
			</div>";
			$counter++;
		}
	}

	if($counter == 0){
		echo "
		<div class='item empty'>
			<span>Ничего не найдено</span>
		</div>";
	}
?>
