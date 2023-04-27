<?php 
if (isset($_POST['submit'])){
    require_once('../model/http/usuario.php');
    $user = new usuario();
    if ($user->logar($_POST['email'], $_POST['senha'])){
        session_start();
        $_SESSION['verifica_log'] = 1;
        $idUser = $user->trazerIdUsuario($_POST['email'], $_POST['senha']);
        $_SESSION['nome'] = $user->nomeUsuario($idUser);
        header('Location: home.php');
        exit();
    }else{
        $mensagem = "DADOS INVALIDOS!";
        echo '<script>alert("'.$mensagem.'");</script>';
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Soft Now</h1>
            <h1>Caiu de Paraquedas e Não tem Uma Conta ? <a href="cadastro.php">criar conta</a>                                           </h1>
            <h1>
                Já tem conta mas esqueceu a senha ? <a href="esqueciSenha.php">recuperar senha</a>
            </h1>
            <img src="../imgs/login_img.svg" class="left-mudSenha-image" alt="Animação Unicornio">
        </div>

        <form action="" method="POST"> 
            <div class="right-login">
                    <div class="card-login">
                    <h1>LOGIN</h1>
                            <div class="textfield">
                                <label for="usuario">Email</label>
                                <input type="text" name="email" placeholder="Email" required>
                            </div>

                            <div class="textfield">
                                <label for="usuario">Senha</label>
                                <input type="password" name="senha" id="senha" placeholder="Senha" required >
                                <i class="bi bi-eye-fill" id="btn_senha" onclick="mostrarSenha()"></i>
                                
                            </div>
    
                            <button type="submit" name="submit" id="submit" class="btn-login">enviar</button>
                    </div>
            </div>
        </form>
    </div>
    </form>

    <script src="../scripts/login_cadastro.js"></script>
</body>
</html>