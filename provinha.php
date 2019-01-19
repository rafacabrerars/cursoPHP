<?php
$dia = (int) $_GET["dia"];
echo "Você digitou:   ";
echo $dia;
echo "<br>";

if($dia == 1){
    echo "Domingo";
}elseif ($dia == 2){
    echo "Segunda";
}elseif ($dia == 3){
    echo "Terça";
}elseif ($dia == 4){
    echo "Quarta";
}elseif ($dia == 5){
    echo "Quinta";
}elseif ($dia == 6){
    echo "Sexta";
}elseif ($dia == 7){
    echo "Sabado";
}else {
    echo "Presta atenção retardado";
}