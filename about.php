<!DOCTYPE html>
<html>
<head>
	<title>FTS A-64</title>
	<link rel='stylesheet' type='text/css' href='css/slick.css' />
	<link rel='stylesheet' type='text/css' href='css/style.css' />
	<link rel='stylesheet' type='text/css' href='fonts/fonts.css' />
	<script type='text/javascript' src='js/jquery-3.2.1.min.js'></script>
	<script type='text/javascript' src='js/FTS.DIGITAL.js'></script>
	<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
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
	<div class='banner'>
		<div class='items'>
			<div class='item i1 active'></div>
			<div class='item i2'></div>
			<div class='item i3'></div>
			<div class='clear'></div>
		</div>
	</div>
	<div class='servicesblock'>
		<div class='wrapper'>
			<!--
			<div class='left'>
				<h3>Цели организации</h3>
				
				<div class='zapilil'>
					<p>Выявление посягательств, которые направлены против общественной безопасности и общественного порядка, предусмотренного разделом IX Уголовного Кодекса Российской Федерации. В соответствии с Федеральным законом от 21 июля 2014 г. N 212-ФЗ "Об основах общественного контроля в Российской Федерации» максимальное использование профессионального опыта и интеллектуального потенциала членов Организации в решении общественно значимых социальных, экономических, научных, культурных, образовательных и управленческих задач.</p>
					<a href='#' class='btn'>Подробнее</a>
					<div class='clear'></div>
				</div>

				<div class='index_services'>
					<h3>Лучшие специалисты Красноярска предлагают свою помощь по следующим направлениям</h3>
					<div class='flex'>
						<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
							<div class="flipper">
								<div class="front">
									front
								</div>
								<div class="back">
								 back
								</div>
							</div>
						</div> 
						<?php
							/*
							include('php/FTS_DB.php');
							$URCOMPANIESDBS = $pdo->prepare('SELECT * FROM urists_cat ORDER BY position ASC');
							$URCOMPANIESDBS->execute();
							$URCOMPANIESDBSX = $URCOMPANIESDBS->fetchAll();
							foreach ($URCOMPANIESDBSX as $URCOM){
								if($URCOM['id'] != 0){
									echo "
										<div class='flip-container' ontouchstart='this.classList.toggle('hover');'>
											<div class='flipper'>
												<div class='front'>
													<div class='icon i".$URCOM['id']."'></div>
													<span class='text'>".$URCOM['name']."</span>
												</div>
												<div class='back'>
													<ul>
														<li>Некачественная бытовая техника
														<li>Некачественная бытовая техника
														<li>Некачественная бытовая техника
														<li>Некачественная бытовая техника
														<li>Некачественная бытовая техника
														<li>Некачественная бытовая техника
														<li>Некачественная бытовая техника
													</ul>
												</div>
											</div>
										</div>
									";
								}
							}
							*/
						?>
					</div>
				</div>



			</div>
			-->
			<div class='left' style='width:100%; float:none;'>
				<h3>Цели организации</h3>
				<p style='text-align:justify;'>Выявление посягательств, которые направлены против общественной безопасности и общественного порядка, предусмотренного разделом IX Уголовного Кодекса Российской Федерации.
				В соответствии с Федеральным законом от 21 июля 2014 г. N 212-ФЗ "Об основах общественного контроля в Российской Федерации» максимальное использование профессионального опыта и интеллектуального потенциала членов Организации в решении общественно значимых социальных, экономических, научных, культурных, образовательных и управленческих задач.<br>
				Наша организация ведет работу, направленную на координацию деятельности министерств, ведомств, органов местного самоуправления и общественных организаций, а также на рассмотрение и решение вопросов, касающихся сферы охраны здоровья граждан. В том числе, рассмотрение и выработка предложений по повышению качества и доступности медицинской помощи, включая лекарственное обеспечение, эффективность и безопасность медицинских технологий и медицинской продукции, реформирование системы здравоохранения, совершенствование государственной системы качества оказания медицинской помощи. Проводит работу по улучшению доступности и качества оказания всесторонней помощи пациентам в том числе и с неизлечимыми формами заболеваний. Осуществляет гражданский контроль за ходом выполнения и эффективностью программы модернизации здравоохранения на территории Красноярского края. Ведёт постоянный мониторинг качество обслуживания пациента (условия пребывания в учреждениях здравоохранения, оперативность доступа, поведение медицинского персонала), формирует рейтинг относительно репутации того или иного медицинского учреждения на основании общественного мнения.<br>
				На сегодняшний день в Красноярском крае работает ряд крупных общественных организаций, объединяющих представителей юридической профессии, а также адвокатских образований и многочисленных юридических компаний. В связи с чем, одна из приоритетных задач нашей Организации - это повышение прозрачности рынка юридических услуг в Красноярском крае; разработка и формирование рейтинга, который бы служил ориентиром для судов и потребителя услуг, с помощью которого возможно будет оценить уровень и профессионализм оказанных юридических услуг. Для совершенствования механизмов рейтинга, формируется Экспертный совет, в состав которого уже вошли представители общественных объединений, научного сообщества и руководители органов исполнительной власти. В формировании рейтинга не принимает участие ни один представленный в нем юрист. Рейтинг является некоммерческим проектом, он не спонсируется ни адвокатскими образованиями, ни юридическими компаниями и не имеет цели продвижения интересов конкретных специалистов.<br>
				Кроме того, сегодня по уровню воздействия на компоненты природной среды Красноярский край занимает одно из лидирующих мест в стране. В связи с чем, наша организация также проводит мероприятия, направленные на выявления и предотвращение, существующего негативного воздействия на окружающую среду и здоровье населения. В соответствии с п. 1 ст. 12 Федерального закона от 10.01.2002 г. № 7-ФЗ «Об охране окружающей среды» общественные объединения и некоммерческие организации имеют право осуществлять деятельность в области охраны окружающей среды в том числе: обращаться в суд с заявлениями об ограничении, о приостановлении и прекращении хозяйственной и иной деятельности организации, оказывающей негативное воздействие на окружающую среду.<br>
				С учетом обозначенных ключевых направлений наша организация совместно со всеми заинтересованными участниками гражданского общества Красноярского края, реализует комплекс мероприятий, направленный на взаимодействие между адвокатскими образованиями, частными юридическими компаниями, независимыми экспертными учреждениями, Арбитражными управляющими, органами исполнительной власти для повышения прозрачности рынка в сфере оказания юридических услуг и обеспечения доступа граждан к квалифицированной юридической помощи, а также к высококачественным услугам здравоохранения.</p>
			</div>
		</div>
	</div>
	<div class='lawyers'>
		<div class='wrapper'>
			<h2>Экспертный совет</h2>
			<div class='flexLawyers'>
				<div class='item i1'>
					<div class='image'></div>
					<div class='stars'>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
					</div>
					<div class='container'>
						<span class='name'>Иван Бишель</span>
						<span class='description'>Специалист по семейным делам</span>
						<span class='stage'>Стаж - 3 года</span>
					</div>
					<div class='button'>
						<a href='#' class='btn'>Получить консультацию</a>
					</div>
				</div>
				<div class='item i1'>
					<div class='image'></div>
					<div class='stars'>
						<div></div>
						<div></div>
						<div></div>
					</div>
					<div class='container'>
						<span class='name'>Иван Бишель</span>
						<span class='description'>Специалист по семейным делам</span>
						<span class='stage'>Стаж - 3 года</span>
					</div>
					<div class='button'>
						<a href='#' class='btn'>Получить консультацию</a>
					</div>
				</div>
				<div class='item i1'>
					<div class='image'></div>
					<div class='stars'>
						<div></div>
					</div>
					<div class='container'>
						<span class='name'>Иван Бишель</span>
						<span class='description'>Специалист по семейным делам</span>
						<span class='stage'>Стаж - 3 года</span>
					</div>
					<div class='button'>
						<a href='#' class='btn'>Получить консультацию</a>
					</div>
				</div>
				<div class='item i1'>
					<div class='image'></div>
					<div class='stars'>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
					</div>
					<div class='container'>
						<span class='name'>Иван Бишель</span>
						<span class='description'>Специалист по семейным делам</span>
						<span class='stage'>Стаж - 3 года</span>
					</div>
					<div class='button'>
						<a href='#' class='btn'>Получить консультацию</a>
					</div>
				</div>
				<div class='item i1'>
					<div class='image'></div>
					<div class='stars'>
						<div></div>
						<div></div>
						<div></div>
					</div>
					<div class='container'>
						<span class='name'>Иван Бишель</span>
						<span class='description'>Специалист по семейным делам</span>
						<span class='stage'>Стаж - 3 года</span>
					</div>
					<div class='button'>
						<a href='#' class='btn'>Получить консультацию</a>
					</div>
				</div>
				<div class='item i1'>
					<div class='image'></div>
					<div class='stars'>
						<div></div>
					</div>
					<div class='container'>
						<span class='name'>Иван Бишель</span>
						<span class='description'>Специалист по семейным делам</span>
						<span class='stage'>Стаж - 3 года</span>
					</div>
					<div class='button'>
						<a href='#' class='btn'>Получить консультацию</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- <div class='feedback'>
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
	</div> -->
	<div class='peoples_krsk'>
		<div class='wrapper'>
			<h3>Почетные граждане Красноярского края</h3>
			<div class='flexPeoples'>
				<div class='item'>
					<img src='img/peoples/1.jpg' />
					<p>Шойгу Сергей Кужугетович</p>
					<span class='position'>Министр обороны Российской Федерации, Герой Российской Федерации</span>
					
				</div>
				<div class='item'>
					<img src='img/peoples/2.jpg' />
					<p>Хворостовский Дмитрий Александрович</p>
					<span class='position'>Выдающийся музыкант и один из лучших баритонов современности, выступал на всех ведущих концертных площадках мира.</span>
					
				</div>
				<div class='item'>
					<img src='img/peoples/3.jpg' />
					<p>Павел Стефанович Федирко</p>
					<span class='position'>Российский и советский государственный и партийный деятель, выдающийся управленец и организатор.</span>
					
				</div>
				<div class='item'>
					<img src='img/peoples/4.jpg' />
					<p>Геннадий Матвеевич Фадеев</p>
					<span class='position'>Российский государственный деятель, руководитель Красноярской железной дороги, первый президент ОАО "РЖД".</span>
					
				</div>
				<div class='item'>
					<img src='img/peoples/5.jpg' />
					<p>Хазрет Меджидович Совмен</p>
					<span class='position'>Государственный деятель. Автор крупных изобретений в золотодобывающей отрасли. В прошлом президент Республики Адыгея.</span>
					
				</div>
				<div class='item'>
					<img src='img/peoples/6.jpg' />
					<p>Анатолий Ефимович Сафонов</p>
					<span class='position'>Советский и российский военный и государственный деятель, почетный сотрудник контрразведки Российской Федерации.</span>
					
				</div>
				<div class='item'>
					<img src='img/peoples/7.jpg' />
					<p>Виктор Васильевич Плисов</p>
					<span class='position'>Советский государственный деятель. Строил Красноярскую ГЭС, курировал строительство Майской, Курейской, Богучанской и других гидроэлектростанций.</span>
					
				</div>
				<div class='item'>
					<img src='img/peoples/8.jpg' />
					<p>Виктор Андреянович Неволин</p>
					<span class='position'>Ученый-геолог, организатор геолого-разведочных работ на севере Красноярского края, заслуженный геолог РСФСР.</span>
					
				</div>
				<div class='item'>
					<img src='img/peoples/9.jpg' />
					<p>Дмитрий Георгиевич Миндиашвили</p>
					<span class='position'>Почетный мастер спорта по вольной борьбе, основатель школы высшего спортивного мастерства по вольной борьбе в Красноярске, заслуженный тренер СССР.</span>
					
				</div>
				<div class='item'>
					<img src='img/peoples/10.jpg' />
					<p>Александр Николаевич Кузнецов</p>
					<span class='position'>Доктор технических наук, член-корреспондент Международных инженерной и технологической академий. Герой Социалистического Труда.</span>
					
				</div>
				<div class='item'>
					<img src='img/peoples/11.jpg' />
					<p>Красовская Валентина Павловна</p>
					<span class='position'>Детский хирург, заслуженный врач Российской Федерации, доктор медицинских наук, профессор.</span>
					
				</div>
				<div class='item'>
					<img src='img/peoples/12.jpg' />
					<p>Александр Сергеевич Исаев</p>
					<span class='position'>Всемирно известный лесовед, признанный в мире специалист в области лесной экологии, один из создателей экологической доктрины Российской Федерации</span>
					
				</div>
				<div class='item'>
					<img src='img/peoples/13.jpg' />
					<p>Екатерина Константиновна Иофель</p>
					<span class='position'>Заслуженный деятель искусств России, педагог. Создала в Красноярске уникальную школу вокала.</span>
					
				</div>
				<div class='item'>
					<img src='img/peoples/14.jpg' />
					<p>Владимир Иванович Долгих</p>
					<span class='position'>Советский и российский государственный, партийный и общественный деятель.</span>
					
				</div>
				<div class='item'>
					<img src='img/peoples/15.jpg' />
					<p>Иосиф Исаевич Гительзон</p>
					<span class='position'>Биофизик, академик Российской академии наук, член Международной академии астронавтики.</span>
					
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
					autoplaySpeed: 2000,
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