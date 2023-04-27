<?php 
    if (isset($_POST['submit'])){
        require_once('../controller/esqueciSenhaController');
        
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESQUECI SENHA</title>
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
                    <h1>CONFIRMAR DADOS</h1>
                            <div class="textfield">
                                <label for="usuario">Email</label>
                                <input type="text" name="EMAIL" placeholder="Email" required>
                            </div>

                            <div class="textfield">
                                <label for="usuario">Telefone</label>
                                <input type="text" name="TELEFONE" placeholder="Telefone" required>
                            </div>
                         

                            <button type="submit" name="submit" id="submit" class="btn-login">enviar</button>
                    </div>
            </div>
        </form>
    </div>
    </form>
</body>
</html>