<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Insert sql</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="screen">   
</head>
<body>
<form action="index.html">
    <input class="voltar" type="submit" value="Voltar" />
</form>
</body>
</html>



<?php
if ($_POST){
    $con = mysqli_connect('localhost', 'root', 'total.21', 'insert_api');
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sexo = $_POST['sexo'];

    $q = mysqli_query($con, "INSERT INTO users (email, senha, nome, sexo) VALUES('$email', '$senha', '$nome','$sexo')"); 

    session_start();
    if($q)
    {
        echo 'Usuario Cadastrado';
    }
    else
    {
        echo 'Não foi possível cadastrar o usuário';
    }
}
?>