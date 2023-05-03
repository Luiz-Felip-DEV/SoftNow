<?php
session_start();

if (isset($_POST['submit'])){

    if ($_POST['codigo'] == $_SESSION['CodigoVerificacao']){
        require_once('../model/Http/usuario.php');
        $user = new usuario();
        $user->inserirUsuario($_SESSION['Nome'], $_SESSION['Sobrenome'], $_SESSION['Email'], $_SESSION['Senha'], $_SESSION['Telefone']);
        $_SESSION['UserCadas'] = true;
    }else{
        require_once('../model/Http/func.php');
        $fc = new func();
        $mensa = "Código invalido, tente novamente";
        $fc->alertaTela($mensa);
    }  

}
    
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../estilos/login.css">
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Soft Now - Nos Confirme o Código<br>Que Foi Enviado Atráves do seu Email</h1>
            <img src="../imgs/tela_codigo_img.svg" class="left-mudSenha-image" alt="Animação Unicornio">
        </div>

        <form action="" method="POST"> 
            <div class="right-login">
                    <div class="card-login">
                    <h1>CODIGO</h1>
                            <div class="textfield">
                                <label for="usuario">Codigo</label>
                                <input type="number" name="codigo" placeholder="Codigo" required>
                            </div>

                            <button type="submit" name="submit" id="submit" class="btn-login">enviar</button>
                    </div>
            </div>
        </form>
    </div>
    </form>
</body>
</html>