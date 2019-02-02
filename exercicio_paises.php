<?php
$UF = file_get_contents ('http://www.geonames.org/childrenJSON?geonameId=3469034');
$UF = json_decode ($UF, true);
//echo "<pre>";
//print_r($UF);

foreach ($UF['geonames'] as $info => $dados){
    echo "<h5>{$dados ['name']} - {$dados ['population']} - {$dados ['adminCodes1'] ['ISO3166_2']}";

    //print_r($info);
}
