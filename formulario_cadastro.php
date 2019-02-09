<?php
if ($_POST) {

    $campos = array_keys($_POST);

    foreach ($campos as $campo) {
        if (empty($_POST[$campo])) {
            echo "$campo é um campo obrigatório<br>";
        }
//            else{
//            $campo = trim($_POST[$campo]);
//            }
//    }
}

//$_POST = array_map('strtoupper',$_POST);

    print_r($_POST['nome']) ?? '';
    $senha = $_POST['senha'];
    $senhaConfirmacao = $_POST['senha-confirmacao'];
    if ($senha != $senhaConfirmacao){
    echo "Senhas imcompativeis<br>";

    }

    $foto = $_FILES['foto'];
}




