<?php include('includes/header.php'); 
    // require_once('php/db.php');
?>

<link rel="stylesheet" href="assets/css/pleader.css">
<div class='FeedBackForm'>
		<div class='window'>
			<div class='headline'><span>Форма добавления отзыва про адвоката</span><div class='close' onclick='Interface.CloseFeedbackForm();'></div></div>
			<div class=''>
            <span class='label'>Данные об адвокате</span>
				<input type='name' class='advokat_name' name='advokat_name' placeholder='Ф.И.О. Адвоката *' />
				<input type='number' class='advokat_num' name='advokat_num' placeholder='Номер адвоката в реестре палаты' />
				<input type='name' class='advokat_palata' name='advokat_palata' placeholder='Адвокатская палата в которой состоит адвокат' />
				<input type='name' class='advokat_resident' name='advokat_resident' placeholder='Членом какой коллегии является адвокат (бюро, кабинета)' />
				<input type='name' class='advokat_resident' name='advokat_resident' placeholder='Сайт адвоката или коллегии (бюро, кабинета)' />
				<input type='name' class='advokat_resident' name='advokat_resident' placeholder='Контактный E-Mail адвоката' />
				<input type='name' class='advokat_resident' name='advokat_resident' placeholder='Контактный телефон адвоката' />
				<span class='label'>Фотография адвоката</span>
				<input type='file' class='advokat_resident' name='advokat_resident' placeholder='Контактный телефон адвоката' />
				<select class='advokat_state' name='advokat_state'>
					<option disabled>Текущий статус адвоката</option>
					<option>Действующий</option>
					<option>Приостановлен</option>
					<option>Удален из реестра</option>
					<option>Изменил членство</option>
					<option>Прекращен</option>
					<option>Отмена решения о приеме</option>
					<option>Исключён</option>
				</select>
				<span class='label'>Ваши данные</span>
				<input type='name' class='name' name='name' placeholder='Ваше Ф.И.О *' />
				<input type='email' class='email' name='email' placeholder='Ваш E-Mail *' />
				<textarea class='text' type='text' placeholder='Текст отзыва *'></textarea>
				<a href='#' class='btn' onclick='Interface_CloseAdvokatFBForm1(); return false;'>Отправить отзыв</a>
			</div>
        </div>
        
    </div>
    <div class="shadow"></div>
<div class="container">
    <div class="sidebar">
        <button class="btn review">Отзыв об адвокате</button>
        <button class="btn">Пожаловаться на адвоката</button>
        <button class="btn">Черный список адвокатов</button>
    </div>
    <main>
        <div class="review_block" hidden>
            <h2>Отзывы об адвокатах</h2>
            <p>Если у вас есть опыт сотрудничества с адвокатом, будем признательны, если вы поделитесь своим мнением о работе специалиста. Ваш положительный или отрицательный отзыв может быть полезен другим людям, нуждающимся в качественной юридической помощи.</p>
            <p>Чтобы оставить отзыв про адвоката, заполните специальную форму, указав всю необходимую информацию о себе и специалисте, оказавшем вам юридические услуги. Вы можете указать характеризующую адвоката информацию как связанную с осуществлением адвокатской деятельности, так и по известным Вам обстоятельствам вне осуществления последним профессиональной деятельности.</p>
            <p>Все отзывы проходят предварительную проверку на предмет достоверности: публикуются только реальные мнения людей, основанные на их собственном опыте и в соответствие с утверждёнными правилами.</p>
            <p>Наш ресурс не раскрывает и не передает персональные данные третьим лицам. Адрес вашей электронной почты скрывается при публикации отзыва.</p>
            <button class="btn">Оставить отзыв</button>
        </div>

        <h2>Реестр адвокатов</h2>
        <div class="search_block">
            <input type="search" placeholder="Поиск адвоката по Ф.И.О. или номеру в реестре" name="" id="search">
            <button class="find">Поиск</button>
        </div>
        <div class="results">
            <table >
                <thead>
                    <tr>
                        <td>Ф.И.О. Адвоката</td>
                        <td>Регистрационный номер</td>
                        <td>Номер удостоверения</td>
                        <td>Адрес</td>
                        <td>Телефон</td>
                    </tr>
                </thead>
                <tbody class="table">
                <?php 
                    // $dbh = new PDO('mysql:host=localhost;dbname=kraycenter;charset=utf8', 'root', 'admin');
                
                    // $result = $dbh->query('SELECT * FROM advokats ORDER BY name ASC LIMIT 20');
                    // $resultf = $result->fetchAll();
                    // foreach ($resultf as $row) {
                    //     print_r('<tr data-id="'.$row[id].'"><td>'.$row[name].'</td><td>'.$row[reg_num].'</td><td>'.$row[num_udostover].'</td><td>'.$row[address].'</td><td>'.$row[phone].'</td></tr>');
                    // }
                ?>
                </tbody>
            </table>
        </div>
    </main>
</div>
    <div class="feedback">
        <div class="wrapper">
            <div class="left">
                <h2>Оставьте заявку <br>прямо сейчас</h2>
                <input type="name" class="name" name="name" placeholder="Ваше имя">
                <input type="phone" class="phone" name="phone" placeholder="Ваш номер телефона">
                <textarea class="message" type="message" name="message" placeholder="Ваш вопрос"></textarea>
                <span class="warning">Отправляя данную форму Вы соглашаетесь с политикой конфиденциальности и условиями использования</span>
                <button class="btn">Отправить</button>
            </div>
            <div class="clear"></div>
        </div>
    </div>



    
<script src="/assets/js/pleader.js"></script>

<?php include('includes/footer.php'); ?>