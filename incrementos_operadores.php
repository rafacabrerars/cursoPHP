<?php
$a =1;
echo ++$a;
echo "<br>";
echo $a++;
echo $a;


echo "<br>";


echo "<br>";

$a = 1;
$b = '1';
 var_dump($a, $b, $a == $b);

echo "<br>";
var_dump($a, $b, $a === $b);

echo "<br>";


$texto = "PHP";
echo "<br>";

if(strpos($texto, "P") === false) {
    echo "não encontrei";

}else {
    echo "encontrei";
}

