<form action="numero_primo.php" method="post">
    Digite um numero :<input type="text" name="num1"><br>

    </select>
    <input type="submit" value="verificar">
</form>
<?php

$num1 = ($_POST['num1']) ?? null;
$num2 = $num1-1;
$operacao = $num1 % $num2;

if($operacao == 0){
    echo "Numero PRIMO";
}else
    echo "Numero NÃO PRIMO";