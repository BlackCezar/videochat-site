<!DOCTYPE html>
<html>
<head>
	<title>FTS A-64</title>
	<link rel='stylesheet' type='text/css' href='css/style.css' />
	<link rel='stylesheet' type='text/css' href='fonts/fonts.css' />
	<script type='text/javascript' src='js/jquery-3.2.1.min.js'></script>
	<script type='text/javascript' src='js/FTS.DIGITAL.js'></script>
	<?php 
		$ID = $_GET['id'];
		if($ID == 1){
			echo "<style>.form1{display:block !important;}</style>";
		}
		if($ID == 2){
			echo "<style>.form2{display:block !important;}</style>";
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
	<div class='report_pages'>
		<div class='wrapper'>
			
				<div class='form1'>
					<h1>Сообщить о коррупции</h1>
					<p>В соответствии с пунктом 1 статьи 1 Федерального закона от 25 декабря 2008 года No 273-ФЗ «О противодействии коррупции» КОРРУПЦИЯ – это:<br>
					– злоупотребление служебным положением, дача взятки, получение взятки, злоупотребление полномочиями, коммерческий подкуп либо иное незаконное использование физическим лицом своего должностного положения вопреки законным интересам общества и государства в целях получения выгоды в виде денег, ценностей, иного имущества или услуг имущественного характера, иных имущественных прав для себя или для третьих лиц либо незаконное предоставление такой выгоды указанному лицу другими физическими лицами;<br>
					– совершение деяний, указанных выше, от имени или в интересах юридического лица.<br>
					В соответствии с пунктом 2 статьи 1 Федерального закона от 25 декабря 2008 года No 273-ФЗ «О противодействии коррупции» противодействием коррупции является:<br>
					деятельность федеральных органов государственной власти, органов государственной власти субъектов Российской Федерации, органов местного самоуправления, институтов гражданского общества, организаций и физических лиц в пределах их полномочий:<br>
					а) по предупреждению коррупции, в том числе по выявлению и последующему устранению причин коррупции (профилактика коррупции);<br>
					б) по выявлению, предупреждению, пресечению, раскрытию и расследованию коррупционных правонарушений (борьба с коррупцией);<br>
					в) по минимизации и (или) ликвидации последствий коррупционных правонарушений.<br>
					Если Вы считаете, что Вам стали известны факты коррупции, а так же если у Вас имеются конкретные предложения, направленные на совершенствование работы по противодействию коррупции, Вы можете сообщить об этом.<br><br>

					<p>В электронной анкете в Вашем обращении укажите в именительном падеже Ваши:</p>
					<div class='content'>
						<span class='label'>Фамилию *</span>
						<input name='surname' class='surname'><br>

						<span class='label'>Имя  *</span>
						<input name='name' class='name'><br>

						<span class='label'>Отчество (при наличии)</span>
						<input name='lastname' class='lastname'><br>

						<span class='label'>Наименование организации (юридического лица)</span>
						<input name='ur_org' class='ur_org'><br>

						<p>В электронной анкете в Вашем обращении укажите:</p>

						<span class='label'>адрес электронной почты, по которому должны быть направлены ответ, уведомление о переадресации Вашего обращения *</span>
						<input name='email' class='email'><br>

						<span class='label'>Повторите адрес электронной почты для автоматической проверки правильности его заполнения</span>
						<input name='email2' class='email2'><br>

						<span class='label'>Номер телефона</span>
						<input name='phone' class='phone'><br>

						<p>Напишите текст обращения</p>
						<span class='label'>Обращаем Ваше внимание, что в целях объективного и всестороннего рассмотрения Вашего обращения в установленные сроки необходимо в тексте обращения указывать адрес описанного Вами места действия, факта или события.<br><br>В случае, если текст Вашего обращения не позволяет определить суть предложения, заявления или жалобы, ответ на обращение не дается, и оно не подлежит направлению на рассмотрение в государственный орган, орган местного самоуправления или должностному лицу, в соответствии с их компетенцией, о чем Вам будет сообщено в течение семи дней со дня регистрации обращения. <br><br>Обращаем Ваше внимание, что при написании текста обращения в форме электронного документа в поле ввода текста обращения в форме электронного документа для изложения сути предложения, заявления или жалобы отсутствует ограничение по вводимому количеству символов.<br><br>В поле ввода текста обращения в форме электронного документа в Вашем обращении: изложите суть предложения, заявления или жалобы *</span><br>

						<p>В поле ввода текста обращения в форме электронного документа в Вашем обращении:</p>
						<span class='label'>изложите суть предложения, заявления или жалобы *</span>
						<textarea name='message' class='message'></textarea><br>
						<span class='label'>В случае необходимости в подтверждение своих доводов гражданин вправе приложить к обращению необходимые документы и материалы в электронной форме, воспользовавшись функцией «Прикрепить файл».<br><br>Обращаем внимание, что прикрепляемые в предложенном на сайте формате документы и материалы служат лишь подтверждением доводов автора обращения, изложенных в тексте обращения.<br><br>Приложить необходимые документы и материалы в электронной форме можно в любой последовательности двумя самостоятельными вложениями файла без архивирования (файл вложения) по одному из двух разных типов допустимых форматов:<br><br>текстового (графического) формата: txt, doc, docx, rtf, xls, xlsx, pps, ppt, odt, ods, odp, pub, pdf, jpg, jpeg, bmp, png, tif, gif, pcx;</span><br>
						<input type='file' class='file'><br>
						<div class='added_files'></div>
						<span class='label'>Обращаем внимание, что информация о персональных данных авторов обращений, направленных в электронном виде, не хранится и не обрабатывается, так как «Краевой Центр» не является оператором персональных данных.</span><br>
						<span class='label'>* Поля, отмеченные звездочкой, обязательны для заполнения.</span><br>
						<a href='#' class='btn'>Сообщить о коррупции</a>
					</div>
				</div>



				<div class='form2'>
					<h1>Сообщить о террористической угрозе</h1>

					<p>В соответствии с Федеральным законом от 6 марта 2006 г. N 35-ФЗ «О противодействии терроризму» (с изменениями и дополнениями от: 27 июля 2006 г., 8 ноября, 22, 30 декабря 2008 г., 27 июля, 28 декабря 2010 г., 3 мая, 8 ноября 2011 г., 23 июля, 2 ноября 2013 г., 5 мая, 4, 28 июня, 31 декабря 2014 г., 3, 6 июля 2016 г.) терроризм – это идеология насилия и практика воздействия на принятие решения органами государственной власти, органами местного самоуправления или международными организациями, связанные с устрашением населения и (или) иными формами противоправных насильственных действий.<br>
						Основные принципы противодействия терроризму - это сотрудничество государства с общественными и религиозными объединениями, международными и иными организациями, гражданами в противодействии терроризму.<br>
						В соответствии Федеральным законом от 25 июля 2002 г. № 114-ФЗ «О противодействии экстремистской деятельности» (с изменениями и дополнениями от: 27 июля 2006 г., 10 мая, 24 июля 2007 г., 29 апреля 2008 г., 25 декабря 2012 г., 2 июля 2013 г., 28 июня, 21 июля, 31 декабря 2014 г., 8 марта, 23 ноября 2015 г.) экстремистской деятельностью признаётся:<br>
						— насильственное изменение основ конституционного строя и нарушение целостности Российской Федерации;<br>
						— публичное оправдание терроризма и иная террористическая деятельность;<br>
						— возбуждение социальной, расовой, национальной или религиозной розни;<br>
						— пропаганда исключительности, превосходства либо неполноценности человека по признаку его социальной, расовой, национальной, религиозной или языковой принадлежности, или отношения к религии;<br>
						— нарушение прав, свобод и законных интересов человека и гражданина в зависимости от его социальной, расовой, национальной, религиозной или языковой принадлежности, или отношения к религии;<br>
						— воспрепятствование осуществлению гражданами их избирательных прав и права на участие в референдуме или нарушение тайны голосования, соединенные с насилием либо угрозой его применения;<br>
						— воспрепятствование законной деятельности государственных органов, органов местного самоуправления, избирательных комиссий, общественных и религиозных объединений или иных организаций, соединенное с насилием либо угрозой его применения;<br>
						— совершение преступлений по мотивам, указанным в пункте "е" части первой статьи 63 Уголовного кодекса Российской Федерации;<br>
						— пропаганда и публичное демонстрирование нацистской атрибутики или символики либо атрибутики или символики, сходных с нацистской атрибутикой или символикой до степени смешения, либо публичное демонстрирование атрибутики или символики экстремистских организаций;<br>
						— публичные призывы к осуществлению указанных деяний либо массовое распространение заведомо экстремистских материалов, а равно их изготовление или хранение в целях массового распространения;<br>
						— публичное заведомо ложное обвинение лица, замещающего государственную должность Российской Федерации или государственную должность субъекта Российской Федерации, в совершении им в период исполнения своих должностных обязанностей деяний, указанных в настоящей статье и являющихся преступлением;<br>
						— организация и подготовка указанных деяний, а также подстрекательство к их осуществлению;<br>
						— финансирование указанных деяний либо иное содействие в их организации, подготовке и осуществлении, в том числе путем предоставления учебной, полиграфической и материально-технической базы, телефонной и иных видов связи или оказания информационных услуг;<br>
						— Основные принципы противодействия экстремистской деятельности- это сотрудничество государства с общественными и религиозными объединениями, иными организациями, гражданами в противодействии экстремистской деятельности.<br>
						Если Вы считаете, что Вам стали известны факты, о совершённых и готовящихся преступлениях экстремистской и террористической направленности Вы можете сообщить нам об этом в электронной форме.<br>

					</p>
					<div class='content'>
						<span class='label'>Фамилия: *</span>
						<input name='surname' class='surname'><br>
						<span class='label'>Имя: *</span>
						<input name='name' class='name'><br>
						<span class='label'>Отчество:</span>
						<input name='lastname' class='lastname'><br>
						<span class='label'>Текущее местоположение:</span>
						<input name='placement' class='placement'><br>
						<span class='label'>Телефон:</span>
						<input name='phone' class='phone'><br>
						<span class='label'>Текст обращения: *</span>
						<textarea name='message' class='message'></textarea><br>
						<span class='label'>Вы можете прикрепить к сообщению файлы, общим размером до 10 Мб:</span>
						<input type='file' class='file'><br>
						<span class='label'>* Поля, отмеченные звездочкой, обязательны для заполнения.</span><br>
						<a href='#' class='btn'>Сообщить о террористической угрозе</a>
						<span class='label'>Благодарим Вас за общий вклад в противодействие экстремизму и терроризму.</span><br>
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
</body>
</html>