<?php








$nome = 'Jucy';
echo "<pre>";
print_r($GLOBALS);
function exibirNome(){
//    global $nome;
    $nome = $GLOBALS['nome'].' Cabrera';
    echo "<h1>$nome</h1>";

    }
exibirNome();














    //function soma ($a,$b){
//    $resultado=$a+$b;
//    echo "$a+$b =$resultado";
//
//}
//
//function calculartotal($preco,$quantidade=1){
//    $resultado=$preco*$quantidade;
//    echo "$preco*$quantidade=$resultado";
//    return $resultado;
//}
//
//$total=calculartotal(5);
//echo "<br>";
//var_dump($total);
//echo "<br>";
//echo $total;

//    exibirNome('Rafa');
//    exibirNome($nome);
//    soma(2,3);
//    echo "<br>";
//    soma(6,8);
//    echo "<br>";
//    calculartotal(2,2);
//    echo "<br>";
//    calculartotal(5);


////include "tabuada.php";
//






//function parouimpar($numero){
//    if ($numero % 2 == 0){
//        echo "numero é par";
//        return;
//    }
//    echo "numero é impar";
//}
//
//parouimpar(5);
//
//
