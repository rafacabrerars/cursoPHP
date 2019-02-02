<?php
$numero = ($_GET['numero']) ?? 1; //inserir na URL "?numero=x"
$numero = (int) $numero;

echo "<h1>Tabuada do $numero</h1>";

for ($count = 0; $count <=10; $count++){
    $resultado = $numero * $count;
    echo "<h2>{$numero} * {$count} = {$resultado}</h2>";
}
