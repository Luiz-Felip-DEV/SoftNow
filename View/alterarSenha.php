<?php 
    require_once('../model/Http/func.php');
    require_once('../controller/esqueciSenhaController.php');
    require_once('../controller/alterarSenhaController.php');

    session_start();
    $esq = new esqueciSenhaController();
    if($esq){
        $fc = new func();
        $mensa = "DADOS CONFEREM, POR FAVOR ALTERE A SENHA";
        $fc->alertaTela($mensa);

        if (isset($_POST['submit'])){
            $altSenhCtr = new alterarSenhaController();
            $senha = $_POST['senha'];
            $altSenhCtr->alterarSenhaBanco($senha);
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
                                <input type="text" name="senha" placeholder="Senha" required>
                            </div>

                            <div class="textfield">
                                <label for="usuario">Confirmar Senha</label>
                                <input type="text" name="confirmarSenha" placeholder="Confirmar Senha" required>
                            </div>
                         

                            <button type="submit" name="submit" id="submit" class="btn-login">enviar</button>
                    </div>
            </div>
        </form>
    </div>
    </form>
</body>
</html>