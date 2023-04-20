<?php 



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

        <form action="confirm_codigo.php" method="POST"> 
            <div class="right-login">
                    <div class="card-login">
                    <h1>CADASTRO</h1>
                            <div class="textfield">
                                <label for="usuario">Nome</label>
                                <input type="text" name="nome" placeholder="Nome" required>
                            </div>

                            <div class="textfield">
                                <label for="usuario">Sobrenome</label>
                                <input type="text" name="sobrenome" placeholder="Sobrenome" required>
                            </div>

                            <div class="textfield">
                                <label for="usuario">Email</label>
                                <input type="text" name="email" placeholder="E-mail" required>
                            </div>

                            <div class="textfield">
                                <label for="usuario">Senha</label>
                                <input type="password" name="senha" placeholder="Senha" required>
                            </div>


                            <div class="textfield">
                                <label for="usuario">Telefone</label>
                                <input type="number" name="telefone" placeholder="Telefone"required>
                            </div>

                            

                            <button type="submit" name="submit" id="submit" class="btn-login">enviar</button>
                    </div>
            </div>
        </form>
    </div>
    </form>
</body>
</html>