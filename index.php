<?php include('includes/header.php'); 
    // require_once('php/db.php');
?>
<link rel="stylesheet" href="assets/css/index.css">

<div class="slider">
    
    <?php 
        foreach (scandir('./assets/img/banner/') as $file) {
            if (strlen($file) > 3)
            echo '<div class="slide" style="background-image: url(./assets/img/banner/'.$file.');"></div>';
        }
    ?>

</div>

<div class="container index">
        <div class="sidebar sidebar_left">
            <div class="block"><a href="http://www.kremlin.ru/"><img src="assets/img/stbs_icons/1.jpg" alt=""></a></div>
            <div class="block"><a href="http://government.ru/"><img src="assets/img/stbs_icons/2.jpg" alt=""></a></div>
            <div class="block"><a href="http://duma.gov.ru/"><img src="assets/img/stbs_icons/3.jpg" alt=""></a></div>
            <div class="block"><a href="https://www.gosuslugi.ru/"><img src="assets/img/stbs_icons/6.jpg" alt=""></a></div>
            <div class="block btn"><a href="/Report.php?id=1"><span>Сообщить о корупции</span></a></div>
            <div class="block btn"><a href="/Report.php?id=2"><span>Сообщить о террористической угрозе</span></a></div>
        </div>


        <main>
            <h1 class="page_header">Главная</h1>
            <button class="btn">Консультация онлайн</button>
        </main>


        <div class="sidebar sidebar_rigth">
            <div class="widget">
                <label for="search"><h3>Поиск по сайты</h3></label>
                <input type="search" name="search" id="search" placeholder="Введите">
            </div>
            <div class="widget">
                <div class="widget_title">Телефоны доверия</div>
                <div class="widget_body">
                    <div class="widget_block">
                        <div class="widget_img"></div>
                        <div class="widget_desc">
                            <div class="widget_header">Администрация города Красноярска</div>
                            <div class="widget_phone">+7 (391) 226-10-30</div>
                        </div>
                    </div>
                    <div class="widget_block">
                        <div class="widget_img"></div>
                        <div class="widget_desc">
                            <div class="widget_header">
Прокуратура Красноярского края</div>
                            <div class="widget_phone">+7 (391) 265-84-00</div>
                        </div>
                    </div>
                    <div class="widget_block">
                        <div class="widget_img"></div>
                        <div class="widget_desc">
                            <div class="widget_header">Управление ФСБ РФ по Красноярскому краю</div>
                            <div class="widget_phone">+7 (391) 230-96-20</div>
                        </div>
                    </div>
                    <div class="widget_block">
                        <div class="widget_img"></div>
                        <div class="widget_desc">
                            <div class="widget_header">
ГУ МВД России по Красноярскому краю</div>
                            <div class="widget_phone">+7 (391) 245-96-46</div>
                        </div>
                    </div>
                    <div class="widget_block">
                        <div class="widget_img"></div>  
                        <div class="widget_desc">
                            <div class="widget_header">Гражданская Ассамблея Красноярского края</div>
                            <div class="widget_phone">+7 (391) 221-44-44</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

<script src="/assets/js/slider.js"></script>
<?php include('includes/footer.php'); ?>
