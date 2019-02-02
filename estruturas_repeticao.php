<?php

echo "<h1>While</h1>";
$contador = 0;
while ($contador <= 10){
    echo $contador;
    $contador++;
}


echo "<h1>For</h1>";
for ($contador=0; $contador <=10; $contador++){
    echo $contador;
}

echo "<h1>DoWhile</h1>";
$contador = 0;
do {
    echo $contador;
    $contador++;
}while($contador<=10);