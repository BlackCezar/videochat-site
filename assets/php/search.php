<?php 
if ($_SERVER[REQUEST_METHOD] == 'GET') {
    $dbh = new PDO('mysql:host=localhost;dbname=kraycenter;charset=utf8', 'root', 'admin');
    if ($_GET[table] == 'advokats') {
        $word = $_GET[word];
        try {
            if ($word) {
                $result = $dbh->query("SELECT * FROM `advokats` WHERE `id` LIKE '$word' or `name` LIKE \"%$word%\"  or `reg_num` LIKE '$word' or `num_udostover` LIKE '$word' ORDER BY name ASC");
            } else {
                $result = $dbh->query('SELECT * FROM `advokats` LIMIT 20');
            }
            if ($result) {
                $resultf = $result->fetchAll(PDO::FETCH_ASSOC);
                if (!$word) array_push($resultf ,array(finded => 'true'));        
            } else $resultf = array("finded" => 'false');                    
        } catch (Exception $e) {
            print_r("failes");
            $resultf = array("finded" => 'crushed');                    
        }
    }
    print_r(json_encode($resultf));
    // if ($finded) {print_r(',[{"finded":"true"}]');} else {print_r(',{"finded": false}');}
}   


