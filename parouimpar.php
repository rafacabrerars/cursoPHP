<form action="parouimpar.php" method="post">
    Digite um numero :<input type="text" name="num1"><br>

    </select>
    <input type="submit" value="verificar">
</form>
<?php
$operacao = null;
$num1 = ($_POST['num1']) ?? null;
$num2 = 2;
$operacao = $num1 % $num2;

if($operacao == 0){
    echo "Numero PAR";
}else
    echo "Numero IMPAR";