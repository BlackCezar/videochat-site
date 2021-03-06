<!DOCTYPE html>
<html>
<head>
	<title>Консультация онлайн</title>
	<link rel='stylesheet' type='text/css' href='css/slick.css' />
	<link rel='stylesheet' type='text/css' href='css/style.css' />
	<link rel='stylesheet' type='text/css' href='fonts/fonts.css' />
	<script type='text/javascript' src='js/jquery-3.2.1.min.js'></script>
	<script type='text/javascript' src='js/FTS.DIGITAL.js'></script>
	<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<script>
		window.onload = function(){
			var video = document.getElementById('video');
			navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia;
		    window.URL.createObjectURL = window.URL.createObjectURL || window.URL.webkitCreateObjectURL || window.URL.mozCreateObjectURL || window.URL.msCreateObjectURL;

		    // запрашиваем разрешение на доступ к поточному видео камеры
		    navigator.getUserMedia({video: true}, function (stream) {
		      // разрешение от пользователя получено
		      // скрываем подсказку
		      // получаем url поточного видео
		      videoStreamUrl = window.URL.createObjectURL(stream);
		      // устанавливаем как источник для video 
		      video.src = videoStreamUrl;
		    }, function () {
		    	//alert error
		    });
		}
	</script>
</head>
<body>
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
					<a href="index.php" class="active"><br>Главная <span class="fa fa-angle-down"></span><br><br></a>
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
					<a href="obrazovanie.php">Сфера образовательных услуг</a>
				</li>
				<li>
					<a href="#"><br>Рейтинг<br><br></a>
				</li>
			</ul>
		</div>
	</nav>

	<div class='indexpage'>
		<div class='wrapper'>
			<h1>Онлайн консультация</h1>
			<div class='fts_talks'>
				<div class='left'>
					<video id='video' autoplay='autoplay'></video>
				</div>
				<div class='right'>
					<div class='loading'>
						<div></div>
						<span>Ищем для Вас подходящего специалиста...</span>
					</div>
				</div>
				<div class='clear'></div>
			</div>
		</div>
	</div>
	<div class='adv_block'>
		<div class='wrapper'>
			<h3>Рекламный блок</h3>
			<div class='items'>
				<div class='item i1 active'>
					<img src='https://gmpnews.ru/wp-content/uploads/2009/07/tablets.jpg' />
					<div class='text'>
						<p>Реклама лекарственного препарата</p>
						<span class='position'>Имеются противопоказания, необходима консультация специалиста</span>
					</div>
					<div class='clear'></div>
				</div>
				<div class='item i2'>
					<img src='http://gazeta-yaroslavsky.ru/wp-content/uploads/2017/07/yazyk1.jpg' />
					<div class='text'>
						<p>Реклама школы английского языка</p>
						<span class='position'>Английский язык за 60 часов</span>
					</div>
					<div class='clear'></div>
				</div>
				<div class='item i3'>
					<img src='https://img.7ya.ru/pub/img/18811/478131913.jpg' />
					<div class='text'>
						<p>Реклама частного детского садика</p>
						<span class='position'>Занятия с детьми дошкольного возраста, с 3-х лет</span>
					</div>
					<div class='clear'></div>
				</div>
				<div class='item i4'>
					<img src='http://themis.ru/images/advocate_1_b.jpg' />
					<div class='text'>
						<p>Реклама частного адвоката</p>
						<span class='position'>Сложные юридические вопросы - простые решения</span>
					</div>
					<div class='clear'></div>
				</div>
			</div>
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
		<script type='text/javascript'>
		$(document).ready(function(){
			$(".flexPeoples").slick({
			  dots: false,
			  arrows: false,
			  infinite: true,
			  speed: 300,
			  slidesToShow: 4,
			  slidesToScroll: 1,
			  autoplay: true,
				autoplaySpeed: 5000,
			  responsive: [
			    {
			      breakpoint: 1024,
			      settings: {
			        slidesToShow: 4,
			        slidesToScroll: 1,
			        infinite: true,
			        dots: true
			      }
			    },
			    {
			      breakpoint: 600,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 1
			      }
			    },
			    {
			      breakpoint: 480,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1
			      }
			    }
			    // You can unslick at a given breakpoint now by adding:
			    // settings: "unslick"
			    // instead of a settings object
			  ]
			});
		});
	</script>
</body>
</html>