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
	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
	<style>
        #yandex_map{
            width: 100%; height: 500px; padding: 0; margin: 0;
        }
        #yandex_map .fts_digital_header{font-family:"SF_FONT"; font-weight:700; font-size:16px; display:block; margin:10px;}
        #yandex_map .fts_digital_about{font-family:"SF_FONT"; font-weight:400; font-size:14px; display:block; margin:10px;}
        #yandex_map .fts_digital_button{font-family:SF_FONT; font-weight:400; font-size:90%; color:#fff; text-decoration:none; outline:none; padding:7px 15px; margin:10px; border-radius:3px; background:#204E78; transition:all 500ms ease;}
    </style>
	<script type='text/javascript'>
		ymaps.ready(init);
		function init(){
		    var geolocation = ymaps.geolocation,
		        myMap = new ymaps.Map('yandex_map', {
		            center: [55, 34],
		            zoom: 10
		        }, {
		            searchControlProvider: 'yandex#search'
		        });

		    // Сравним положение, вычисленное по ip пользователя и
		    // положение, вычисленное средствами браузера.
		    geolocation.get({
		        provider: 'yandex',
		        mapStateAutoApply: true
		    }).then(function (result) {
		        // Красным цветом пометим положение, вычисленное через ip.
		        result.geoObjects.options.set('preset', 'islands#redCircleIcon');
		        result.geoObjects.get(0).properties.set({
		            balloonContentBody: 'Мое местоположение'
		        });
		        myMap.geoObjects.add(result.geoObjects);
		    });

		    geolocation.get({
		        provider: 'browser',
		        mapStateAutoApply: true
		    }).then(function (result) {
		        // Синим цветом пометим положение, полученное через браузер.
		        // Если браузер не поддерживает эту функциональность, метка не будет добавлена на карту.
		        result.geoObjects.options.set('preset', 'islands#blueCircleIcon');
		        myMap.geoObjects.add(result.geoObjects);
		    });



			objectManager = new ymaps.ObjectManager({
	            // Чтобы метки начали кластеризоваться, выставляем опцию.
	            clusterize: true,
	            // ObjectManager принимает те же опции, что и кластеризатор.
	            gridSize: 32,
	            clusterDisableClickZoom: true
	        });

		    // Чтобы задать опции одиночным объектам и кластерам,
		    // обратимся к дочерним коллекциям ObjectManager.
		    objectManager.objects.options.set('preset', 'islands#greenDotIcon');
		    objectManager.clusters.options.set('preset', 'islands#greenClusterIcons');
		    myMap.geoObjects.add(objectManager);

		    $.ajax({
		        url: "php/yandex_map_d1.php"
		    }).done(function(data) {
		        objectManager.add(data);
		    });
		}
	</script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>

	<div class='AdvokatFB_Form'>
		<div class='window'>
			<div class='headline'><span>Форма добавления отзыва на учреждение</span><div class='close' onclick='Close_Obrazovanie_FeedBack();'></div></div>
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
				<a href='#' class='btn' onclick='Close_Obrazovanie_FeedBack(); return false;'>Оставить отзыв</a>
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
					<a href="medical.php">Сфера медицинских услуг</a>
				</li>
				<li>
					<a href="obrazovanie.php" class="active">Сфера образовательных услуг</a>
				</li>
				<li>
					<a href="#"><br>Рейтинг<br><br></a>
				</li>
			</ul>
		</div>
	</nav>
	<div class='servicesblock2 pleaders obrazovanie'>
		<div class='wrapper'>
			<div class='center'>



				
					<h1>Образовательные учреждения</h1>

					<div class='search_block'>
						<input type='search' class='search' placeholder='Поиск учреждения по названию' />
						<button class='btn' onclick='EducationSearch();'>Поиск</button>
						<div class='clear'></div>
					</div>

					<div class='table_block'>
						<div class='item main'>
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
						</div>
						<?php
							include("php/FTS_DB.php");
							$OBRAZOVANIES = $pdo->prepare('SELECT * FROM obrazov_org ORDER BY id DESC');
							$OBRAZOVANIES->execute();
							$OBRAZOVANIESX = $OBRAZOVANIES->fetchAll();
							$counter = 0;
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
									<span>Информация временно недоступна.</span>
								</div>";
							}
						?>
						</div>
				
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