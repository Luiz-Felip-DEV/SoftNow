<?php 
    session_start();
    require_once('../model/Http/func.php');
    require_once('../model/Http/usuario.php');
    
    if (isset($_POST['submit'])){
        try{
            $fc = new func();
            $user = new usuario();
            $email = $_SESSION['ema'];
            $tel = $_SESSION['tel'];
            $user->mudarSenha($_POST['senha'], $email, $tel);
            $_SESSION['Verify_mud_senha'] = 1;
            header('Location: login.php');
        }catch(Exception $e){
            $_SESSION['Verify_mud_senha'] = 2;
            $mes = "ERRO: " . $e.getMessage();
        }
    }


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALTERAR SENHA</title>
    <link rel="stylesheet" href="../estilos/login.css">
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Nos confirme seu email para enviarmos um código de confirmação</h1>
            <img src="../imgs/recup_senha_img.svg" class="left-mudSenha-image" alt="Animação Unicornio">
        </div>

        <form action="" method="POST">
            <div class="right-login">
                    <div class="card-login">
                    <h1>ALTERAR SENHA</h1>

                            <div class="textfield">
                                <label for="usuario">Senha</label>
                                <input type="text" name="senha" id="senha" placeholder="Senha" required>
                            </div>

                            <div class="textfield">
                                <label for="usuario">Confirmar Senha</label>
                                <input type="text" name="confirmarSenha" id="confirmarSenha" placeholder="Confirmar Senha" required>
                            </div>
                         
                            <button type="submit" name="submit" id="submit" class="btn-login">enviar</button>
                    </div>
            </div>
        </form>
    </div>
    </form>
</body>
</html>