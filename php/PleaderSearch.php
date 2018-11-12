<?php
	include("FTS_DB.php");
	if($_POST['Search'] != null){
		$ADVOKATS = $pdo->prepare('SELECT * FROM advokats WHERE name LIKE :name OR reg_num = :reg_num ORDER BY name ASC');
		$ADVOKATS->bindValue(':name', "%".$_POST['Search']."%");
		$ADVOKATS->bindValue(':reg_num', $_POST['Search']);
	}
	else{
		$ADVOKATS = $pdo->prepare('SELECT * FROM advokats ORDER BY name ASC');
	}
	$ADVOKATS->execute();
	$ADVOKATSX = $ADVOKATS->fetchAll();
	$counter = 0;

	echo "<div class='item main'>
			<div class='name'>
				<span>Ф.И.О. Адвоката</span>
			</div>
			<div class='regnum'>
				<span>Регистрационный номер</span>
			</div>
			<div class='numudostov'>
				<span>Номер удостоверения</span>
			</div>
			<div class='address'>
				<span>Адрес</span>
			</div>
			<div class='phone'>
				<span>Телефон</span>
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
				<div class='regnum'>
					<span>".$ADVOKAT['reg_num']."</span>
				</div>
				<div class='numudostov'>
					<span>".$ADVOKAT['num_udostover']."</span>
				</div>
				<div class='address'>
					<span>".$ADVOKAT['address']."</span>
				</div>
				<div class='phone'>
					<span>".$ADVOKAT['phone']."</span>
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
