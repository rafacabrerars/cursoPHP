<?php
//print_r($_POST);
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$senha_confirmacao = $_POST['senha_confirmacao'];
$foto = $_FILES['foto'];

if (empty($nome)){
echo 'vc esqueceu seu nome?';
}
echo "<pre>";

if (empty($email)){
    echo 'serio que voce nao tem email ?';
}
echo "<pre>";

if (empty($senha)){
    echo 'A SENHA .... pô';
}
echo "<pre>";

if (empty($senha_confirmacao)){
    echo 'confima a senha panois';
}
echo "<pre>";

if (empty($foto)){
    echo 'faltou a fotinha';
}
