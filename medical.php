<!DOCTYPE html>
<html>
<head>
	<title>FTS A-64</title>
	<link rel='stylesheet' type='text/css' href='css/style.css' />
	<link rel='stylesheet' type='text/css' href='fonts/fonts.css' />
	<script type='text/javascript' src='js/jquery-3.2.1.min.js'></script>
	<script type='text/javascript' src='js/FTS.DIGITAL.js'></script>
	<?php
		if($_GET['id'] == 1){
			echo "<style>.page1{display:block !important;} .page2{display:none !important;} .page3{display:none !important;}</style>";
		}
		if($_GET['id'] == 2){
			echo "<style>.page1{display:none !important;} .page2{display:block !important;} .page3{display:none !important;}</style>";
		}
		if($_GET['id'] == 3){
			echo "<style>.page1{display:none !important;} .page2{display:none !important;} .page3{display:block !important;}</style>";
		}
	?>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>

	<div class='AdvokatFB_Form'>
		<div class='window'>
			<div class='headline'><span>Форма добавления отзыва на учреждение</span><div class='close' onclick='Medical_Report_Close();'></div></div>
			<div class='container'>
				<span class='label'>Отзыв на учреждение</span>
				<span class='setervalue'>Отзыв на учреждение</span>

				<span class='label'>Ваши данные</span>
				<input type='name' class='name' name='name' placeholder='Ваше Ф.И.О *' />
				<input type='email' class='email' name='email' placeholder='Ваш E-Mail *' />
				<textarea class='text' type='text' placeholder='Текст отзыва *'></textarea>

				<span class='label'>Материалы отзыва (необязательно)</span>
				<input type='file' class='file' name='file' placeholder='Материалы жалобы' />
				<br><br>
				<a href='#' class='btn' onclick='Medical_Report_Close(); return false;'>Оставить отзыв</a>
			</div>
		</div>
	</div>
	<div class='AdvokatFB_Form_Shadow'></div>

	<header>
		<div class='wrapper'>
			<div class='burger'></div>
			<div class='logo'></div>
			<!-- <div class='buttonblock'>
				<a href='#' class='btn'>Обратный звонок</a>
			</div> -->
			<div class='contacts'>
				<div class='phone'>
					<div class='icon'></div>
					<span class='text'>+7 (391) 2-222-222</span>
				</div>
				<a href='#' class='btn'>Войти в личный кабинет</a>
			</div>
			<div class='clear'></div>
		</div>
	</header>
	<nav>
		<div class='wrapper'>
			<ul class="topmenu">
				<li>
					<a href="index.php"><br>Главная <span class="fa fa-angle-down"></span><br><br></a>
					<ul class="submenu">
						<li>
							<a href="about.php">Об организации</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="pleader.php">Сфера юридических услуг <span class="fa fa-angle-down"></span></a>
					<ul class="submenu">
						<li>
							<a href="pleader.php">Реестр адвокатов</a>
						</li>
						<li>
							<a href="pleader.php?page=2">Реестр адвокатских образований</a>
						</li>
						<li>
							<a href="lawyers.php">Юристы <span class="fa fa-angle-down"></span></a>
							<ul class="submenu">
								<?php
								include("php/FTS_DB.php");
								$URCOMPANIESDBS = $pdo->prepare('SELECT * FROM urists_cat ORDER BY position ASC');
								$URCOMPANIESDBS->execute();
								$URCOMPANIESDBSX = $URCOMPANIESDBS->fetchAll();
								foreach ($URCOMPANIESDBSX as $URCOM){
									if($URCOM['id'] != 0){
										echo "<li><a href='lawyers.php?cat=".$URCOM['id']."'>".$URCOM['name']."</a></li>";
									}
								}
								?>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="medical.php" class="active">Сфера медицинских услуг</a>
				</li>
				<li>
					<a href="obrazovanie.php">Сфера образовательных услуг</a>
				</li>
				<li>
					<a href="#"><br>Рейтинг<br><br></a>
				</li>
			</ul>
		</div>
	</nav>
	<div class='servicesblock2 sbbock3'>
		<div class='wrapper'>
			<div class='center'>
				<div class='page1'>
					<h1>Медицинские учреждения</h1>
					<p></p>
					<div class='listlawyers_search'>
						<input type='search' class='search' placeholder='Поиск учреждения' />
						<button class='btn' onclick='MedicalSearch();'>Поиск</button>
						<div class='clear'></div>
					</div>
					<div class='med_list'>
						<div class='item main'>
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
						</div>
						<?php
							include("php/FTS_DB.php");
							$MEDICAL = $pdo->prepare('SELECT * FROM med_companys ORDER BY position ASC');
							$MEDICAL->execute();
							$MEDICALX = $MEDICAL->fetchAll();
							$counter = 0;
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
									<span>Информация временно недоступна.</span>
								</div>";
							}
						?>
					</div>
				</div>
				<div class='page2'>
					
				</div>				
			</div>
			<div class='clear'></div>
		</div>
	</div>
	<div class='feedback'>
		<div class='wrapper'>
			<div class='left'>
				<h2>Оставьте заявку <br>прямо сейчас</h2>
				<input type='name' class='name' name='name' placeholder='Ваше имя'/>
				<input type='phone' class='phone' name='phone' placeholder='Ваш номер телефона'/>
				<textarea class='message' type='message' name='message' placeholder='Ваш вопрос'></textarea>
				<span class='warning'>Отправляя данную форму Вы соглашаетесь с политикой конфиденциальности и условиями использования</span>
				<a href='#' class='btn'>Отправить</a>
			</div>
			<div class='clear'></div>
		</div>
	</div>
	<div class='footerLine'></div>
	<footer>
		<div class='wrapper'>
			<div class='left'>
				<div class='logo'></div>
				<a href='#' class='link'>Условия использования</a>
				<a href='#' class='link'>Политика конфиденциальности</a>
				<span class='author'>© 2018, Краевой центр по защите общественной безопасности и здоровья населения</span>
			</div>
			<div class='center'>
				<div class='menu'>
					<a href='index.php'>Главная</a>
				</div>
			</div>
			<div class='right'>
				<div class='phone'>
					<div class='icon'></div>
					<span class='text'>+7 (391) 2-222-222</span>
				</div>
				<br>
				<br>
				<br>
				<br>
				<br>
				<a href='https://fts.digital' target='_blank' title='Разработка и поддержка сайта' class='FTS_DIGITAL'><img src='img/develop_support_white.png' height='20' alt='FTS.DIGITAL Разработка и обслуживание сайтов'/></a>
			</div>
			<div class='clear'></div>
		</div>
	</footer>
</body>
</html>