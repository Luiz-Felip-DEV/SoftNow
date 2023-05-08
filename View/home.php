<?php
    session_start();
    if ($_SESSION['verifica_log'] == 1){
        $nome = $_SESSION['nome'];
        $mensagem = "Seja Bem Vindo, $nome";
        echo '<script>alert("'.$mensagem.'");</script>';
        
    }else{
        header('Location: login.php');
        exit();
    }

    
?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/home.css">
    <title>Home</title>
</head>
<body>
    <div class="teste"> 
        <hr>
        <h1>HOME</h1><br>
        <hr>
    </div>
    <p>Será implementado ainda</p>

<a href="">CARRINHO</a>
</body>
</html>