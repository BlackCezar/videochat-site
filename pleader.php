<!DOCTYPE html>
<html>
<head>
	<title>FTS A-64</title>
	<link rel='stylesheet' type='text/css' href='css/style.css' />
	<link rel='stylesheet' type='text/css' href='fonts/fonts.css' />
	<script type='text/javascript' src='js/jquery-3.2.1.min.js'></script>
	<script type='text/javascript' src='js/FTS.DIGITAL.js'></script>
	<?php
		if($_GET['page'] == 2){
			echo "<style>.advokats1{display:none !important;} .advokats2{display:block !important;}</style>";
		}
		else{
			echo "<style>.advokats1{display:block !important;} .advokats2{display:none !important;}</style>";
		}
	?>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>

	<div class='FeedBackForm'>
		<div class='window'>
			<div class='headline'><span>Начните с бесплатной консультации</span><div class='close' onclick='Interface.CloseFeedbackForm();'></div></div>
			<div class='container'>
				<textarea name='text' type='text' class='text' placeholder='Кратко опишите суть Вашей задачи'></textarea>
				<input type='name' class='name' name='name' placeholder='Ваше имя' />
				<input type='phone' class='phone' name='phone' placeholder='Ваш номер телефона' />
				<center><div class="g-recaptcha" data-sitekey="6LdMTWwUAAAAAKD-Y0qgBiAND9s0EnvSZOOkmiLM"></div></center>
				<a href='#' class='btn'>Отправить</a>
			</div>
		</div>
	</div>

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
					<a href="pleader.php" class='active'>Сфера юридических услуг <span class="fa fa-angle-down"></span></a>
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
					<a href="medical.php">Сфера медицинских услуг</a>
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
	<div class='servicesblock2 pleaders'>
		<div class='wrapper'>
			<div class='left'>
				<div class='advk_menu'>
					<a href='pleader_action.php?id=1' class='btn'>Отзывы об адвокате</a>
					<a href='pleader_action.php?id=2' class='btn'>Пожаловаться на адвоката</a>
					<a href='pleader_action.php?id=3' class='btn'>Черный список адвокатов</a>
				</div>
			</div>
			<div class='center'>



				<div class='advkts advokats1'>
					<h3>Реестр адвокатов</h3>

					<div class='search_block'>
						<input type='search' class='search' placeholder='Поиск адвоката по Ф.И.О. или номеру в реестре' />
						<button class='btn' onclick='PleaderSearch();'>Поиск</button>
						<div class='clear'></div>
					</div>

					<div class='table_block'>
						<div class='item main'>
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
						</div>
						<?php
							include("php/FTS_DB.php");
							$ADVOKATS = $pdo->prepare('SELECT * FROM advokats ORDER BY name ASC');
							$ADVOKATS->execute();
							$ADVOKATSX = $ADVOKATS->fetchAll();
							$counter = 0;
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
									<span>Информация временно недоступна.</span>
								</div>";
							}
						?>
					</div>


				</div>





				<div class='advkts advokats2'>
					<h3>Реестр адвокатских образований</h3>

					<div class='search_block'>
						<input type='search' class='search' placeholder='Поиск организации' />
						<button class='btn' onclick='PleaderOrgSearch();'>Поиск</button>
						<div class='clear'></div>
					</div>

					<div class='table_block'>
						<div class='item main'>
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
						</div>
						<?php
							include("php/FTS_DB.php");
							$ADVOKATS = $pdo->prepare('SELECT * FROM advokats_org ORDER BY name ASC');
							$ADVOKATS->execute();
							$ADVOKATSX = $ADVOKATS->fetchAll();
							$counter = 0;
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
									<span>Информация временно недоступна.</span>
								</div>";
							}
						?>
					</div>

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