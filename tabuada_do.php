<?php
$numero=1;
do {
    echo "<h1>Tabuada do $numero</h1>";

    for ($count=1; $count <= 10; $count++) {
        $resultado=$numero * $count;
        echo "<h2>{$numero} * {$count} = {$resultado}</h2>";
    }$numero++;

}while ($numero<=10);
