<?php
	include("FTS_DB.php");
	if($_POST['Search'] != null){
		$MEDICAL = $pdo->prepare('SELECT * FROM med_companys WHERE name LIKE :name ORDER BY position ASC');
		$MEDICAL->bindValue(':name', "%".$_POST['Search']."%");
	}
	else{
		$MEDICAL = $pdo->prepare('SELECT * FROM med_companys ORDER BY position ASC');
	}
	$MEDICAL->execute();
	$MEDICALX = $MEDICAL->fetchAll();
	$counter = 0;

	echo "<div class='item main'>
			<div class='name'>
				<span>Наименование учреждения</span>
			</div>
			<div class='address'>
				<span>Адрес</span>
			</div>
			<div class='site'>
				<span>Сайт</span>
			</div>
			<div class='report'>
				<span>Отзыв</span>
			</div>
			<div class='clear'></div>
		</div>";

	foreach ($MEDICALX as $MED){
		if($MED['id'] != 0){
			echo "
			<div class='item i1 n".$MED['id']."'>
				<div class='name'>
					<span>".$MED['name']."</span>
				</div>
				<div class='address'>
					<span>".$MED['address']."</span>
				</div>
				<div class='site'>
					<a href='".$MED['website']."' target='_blank' class='btn'>Сайт учреждения</a></span>
				</div>
				<div class='report'>
					<a href='#' onclick='Medical_Report_Open(".$MED['id'].");' class='btn'>Оставить отзыв</a></span>
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
