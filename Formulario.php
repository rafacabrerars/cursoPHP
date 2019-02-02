<?php
$linguagem = 'PHP';

echo "<pre>";

echo "<h1>POST</h1>";
print_r($_POST);

echo "<pre>";

echo "<h1>GET</h1>";
print_r($_GET);

echo "<pre>";

echo "<h1>REQUEST</h1>";
print_r($_REQUEST);

echo "<pre>";

echo "<h1>FILESS</h1>";
print_r($_FILES);

echo "<pre>";

echo "<h1>SERVER</h1>";
print_r($_SERVER);

echo "<pre>";

echo "<h1>GLOBALS</h1>";
print_r($GLOBALS);

echo "<pre>";




?>

<form method="post" enctype="multipart/form-data">
    Numero :<input type="text" name="numero" id="numero"><br>
    Arquivo :<input type="file" name="arquivo"><br>
    <input type="submit" value="calcular">
</form>
