<?php
/*

{
    "type": "FeatureCollection",
    "features": [
        {"type": "Feature", "id": 0, "geometry": {"type": "Point", "coordinates": [55.831903, 37.411961]}, "properties": {"balloonContentBody": "<p>Ваше имя: <input name='login'></p><p><em>Телефон в формате 2xxx-xxx:</em>  <input></p><p><input type='submit' value='Отправить'></p>", "hintContent": ""}},
    ]
}


{
"type":"FeatureCollection",
"features":[
{"type":"Feature","id":2916,"geometry":{"type":"Point","coordinates":[92.8019790000000028840076993219554424285888671875,56.02334400000000158570401254110038280487060546875]},"properties":{"balloonContentBody":"\u041e\u0431\u0449\u0435\u0441\u0442\u0432\u043e \u0441 \u043e\u0433\u0440\u0430\u043d\u0438\u0447\u0435\u043d\u043d\u043e\u0439 \u043e\u0442\u0432\u0435\u0442\u0441\u0442\u0432\u0435\u043d\u043d\u043e\u0441\u0442\u044c\u044e \u00ab\u0421\u0443\u0431\u044a\u0435\u043a\u0442 \u041f\u0440\u0430\u0432\u0430\u00bb<\/span>660028, \u041a\u0440\u0430\u0441\u043d\u043e\u044f\u0440\u0441\u043a\u0438\u0439 \u043a\u0440\u0430\u0439, \u0433. \u041a\u0440\u0430\u0441\u043d\u043e\u044f\u0440\u0441\u043a, \u0443\u043b. \u0422\u0435\u043b\u0435\u0432\u0438\u0437\u043e\u0440\u043d\u0430\u044f \u0434. 1, \u043f\u043e\u043c\u0435\u0449\u0435\u043d\u0438\u0435 401<\/span>","hintContent":"\u041e\u0431\u0449\u0435\u0441\u0442\u0432\u043e \u0441 \u043e\u0433\u0440\u0430\u043d\u0438\u0447\u0435\u043d\u043d\u043e\u0439 \u043e\u0442\u0432\u0435\u0442\u0441\u0442\u0432\u0435\u043d\u043d\u043e\u0441\u0442\u044c\u044e \u00ab\u0421\u0443\u0431\u044a\u0435\u043a\u0442 \u041f\u0440\u0430\u0432\u0430\u00bb"}}]}
*/
    $ARRX = array();
    include("FTS_DB.php");
        $OBRAZOVANIES = $pdo->prepare('SELECT * FROM obrazov_org ORDER BY id DESC');
        $OBRAZOVANIES->execute();
        $OBRAZOVANIESX = $OBRAZOVANIES->fetchAll();
        $counter = 0;
        foreach ($OBRAZOVANIESX as $OBRAZOVAN){

            if( $counter < 1){
                if($OBRAZOVAN['id'] != 0){
                    array_push($ARRX, array('type' => 'Feature', 'id' => intval($OBRAZOVAN['id']), 'geometry' => array('type' => 'Point', 'coordinates' => array(bcsub($OBRAZOVAN['gps_1'], 0, 4), bcsub($OBRAZOVAN['gps_2'], 0, 4))), 'properties' => array('balloonContentBody' => '<span class="fts_digital_header">'.htmlspecialchars($OBRAZOVAN['name']).'</span><span class="fts_digital_about">'.htmlspecialchars($OBRAZOVAN['address']).'</span>', 'hintContent' => htmlspecialchars($OBRAZOVAN['name']))));
                }
             $counter++;
         }


        }

    $json = array('type' => 'FeatureCollection', 'features' => $ARRX);
    echo json_encode($json);
?>