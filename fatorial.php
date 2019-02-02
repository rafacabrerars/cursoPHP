<?php
//$numero = ($_GET ['numero']) ?? 3;
//$numero = (int) $numero;
//$resultado= 1;
//echo "<h1> fatorial do $numero </h1>";
//for ($count = 1; $count <= $numero; $count++){
//    $resultado =$count * $resultado;
//
//}
//echo $resultado;

$numero=5;
$resultado=1;
for($contador=$numero;$contador >=1; $contador --){
    $resultado=$resultado*$contador;
}
echo $resultado ."<br>";



//$numero=3;
//$resultado=1;
//while ($contador<=1);
//{
//    echo $resultado=$resultado* $contador;
//    $contador--;
//}