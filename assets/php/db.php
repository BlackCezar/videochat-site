<?php 
if ($_SERVER[REQUEST_METHOD] == 'GET') {
    $dbh = new PDO('mysql:host=localhost;dbname=kraycenter;charset=utf8', 'root', 'admin');
    
    $result = $dbh->query('SELECT * FROM '.$_GET[get].' ORDER BY name ASC LIMIT '.$_GET[loaded].', 20');
    $resultf = $result->fetchAll(PDO::FETCH_ASSOC);
    print_r(json_encode($resultf));
}   


