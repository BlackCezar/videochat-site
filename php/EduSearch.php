<?php
	include("FTS_DB.php");
	if($_POST['Search'] != null){
		$OBRAZOVANIES = $pdo->prepare('SELECT * FROM obrazov_org WHERE name LIKE :name ORDER BY id DESC');
		$OBRAZOVANIES->bindValue(':name', "%".$_POST['Search']."%");
	}
	else{
		$OBRAZOVANIES = $pdo->prepare('SELECT * FROM obrazov_org ORDER BY id DESC');
	}
	$OBRAZOVANIES->execute();
	$OBRAZOVANIESX = $OBRAZOVANIES->fetchAll();
	$counter = 0;

	echo "<div class='item main'>
			<div class='name'>
				<span>Наименование учреждения</span>
			</div>
			<div class='address'>
				<span>Адрес</span>
			</div>
			<div class='map'>
				<span>Карта</span>
			</div>
			<div class='feedbackx'>
				<span>Отзыв</span>
			</div>
			<div class='clear'></div>
		</div>";

	foreach ($OBRAZOVANIESX as $OBRAZOVAN){
		if($OBRAZOVAN['id'] != 0){
			echo "
			<div class='item item".$OBRAZOVAN['id']."'>
				<div class='name'>
					<span>".$OBRAZOVAN['name']."</span>
				</div>
				<div class='address'>
					<span>".$OBRAZOVAN['address']."</span>
				</div>
				<div class='map'>
					<a href='https://yandex.ru/maps/?ll=".$OBRAZOVAN['gps_1']."%2C".$OBRAZOVAN['gps_2']."&z=18&mode=whatshere&whatshere%5Bpoint%5D=".$OBRAZOVAN['gps_1']."%2C".$OBRAZOVAN['gps_2']."&whatshere%5Bzoom%5D=18' class='btn' target='_blank'>Показать на карте</a>
				</div>
				<div class='feedbackx'>
					<a href='#' onclick='Open_Obrazovanie_FeedBack(".$OBRAZOVAN['id'].");' class='btn'>Оставить отзыв</a>
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
