<form method="post" enctype="multipart/form-data"
      action='formulario_cadastro.php'>
    Nome :<input type="text" name="nome" value = "<?=$nome;?>"><br>
    E-mail :<input type="text" name="email" value = "<?=$email;?>" ><br>
    Senha :<input type="password" name="senha"><br>
    Confirmar senha :<input type="password" name="senha-confirmacao"><br>
    Foto : <input type="file" name="foto"> <input type="submit"
                                                  value="Enviar">
</form>