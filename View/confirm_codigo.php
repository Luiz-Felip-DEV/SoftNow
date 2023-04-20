<?php 
    require_once('../model/Http/email.php');
    require_once('../model/Http/usuario.php');
    $em = new email();
    $nomeCompleto = $_POST['nome'] . $_POST['sobrenome'];
    $codigo = $em->codigoVerificação($_POST['email'],$nomeCompleto);
    
    if (isset($_POST['submit'])){
        if ($codigo == $_POST['codigo'])
            $user = new usuario();
            $nome = $_POST['nome'];
            $sobrenome = $_POST['sobrenome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $telefone = $_POST['telefone'];
            $user->inserirUsuario($nome,$sobrenome,$email,$senha,$telefone);
    }else{
        $mensagem = "ERRO, Codigo Invalido";
        echo '<script>alert("'.$mensagem.'");</script>';
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
            <h1>Soft Now Melhor Empresa de Tecnologia <br>Cadastra-se para entrar nessa comunidade 🔥❤️</h1>
            <img src="../imgs/cadastro_img.svg" class="left-mudSenha-image" alt="Animação Unicornio">
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