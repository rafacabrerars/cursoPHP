<?php
echo "<pre>";
$dias_da_semana []='seg';
$dias_da_semana []='ter';
$dias_da_semana []='qua';
$dias_da_semana []='qui';

print_r ($dias_da_semana);

//__________________________________________________________________________________________

echo "<br>";


$dias = ['seg','ter','qua'];
print_r($dias);

echo "<br>";

//__________________________________________________________________________________________

$dias_da_semanas [0]='seg';
$dias_da_semanas [1]='ter';
$dias_da_semanas [2]='qua';
$dias_da_semanas [3]='qui';
print_r($dias_da_semanas);

echo "<br>";

//__________________________________________________________________________________________

$dias_sem [2] = 'sex';
print_r($dias_sem);

echo "<br>";

//__________________________________________________________________________________________

$pessoas = array('João', 'Maria', 'Pedro');
print_r($pessoas);


echo "<br>";

//__________________________________________________________________________________________


$semana = ['domingo','segunda','terça','quarta','quinta','sexta'];
$semana[] = 'sabado'; //adicionando sabado ao array ...foi inserido no final
echo $semana [6];
echo "<br>";
var_dump($semana);
echo "<br>";
print_r($semana);

echo "<br>";


//__________________________________________________________________________________________


foreach ($semana as $diasdasemana){
    echo "$diasdasemana<br>";
}


echo "<br>";

foreach ($semana as $chave => $diasdasemana){
    echo "$chave => $diasdasemana";
}

//__________________________________________________________________________________________

