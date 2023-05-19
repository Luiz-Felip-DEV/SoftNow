<?php 


class usuario {

    // -> insere um usuario na tabela users do banco

    public function inserirUsuario($nome, $sobrenome, $email, $senha, $telefone)
    {
        $dbHosta        = 'localhost';
        $dbUsername     = 'root';
        $dbPassword     = '';
        $dbName         = 'soft_now';
        $conn           = new mysqli($dbHosta,$dbUsername,$dbPassword,$dbName);
        $query          = "INSERT INTO users(nome_user,sobrenome_user, email_user,senha_user, telefone_user) VALUES('$nome','$sobrenome','$email','$senha', '$telefone')";
        
        $result         = mysqli_query($conn,$query);
    }

    public function inserirUsuarioPessornal(usuarioCaracteristicas $user)
    {
        $dbHosta        = 'localhost';
        $dbUsername     = 'root';
        $dbPassword     = '';
        $dbName         = 'soft_now';
        $conn           = new mysqli($dbHosta,$dbUsername,$dbPassword,$dbName);
        $query          = "INSERT INTO users(nome_user,sobrenome_user, email_user,senha_user, telefone_user) VALUES('$user->getNome()','$user->getSobrenome()','$user->getEmail()','$user->getSenha()', '$user->getTelefone()')";
        
        $result         = mysqli_query($conn,$query);
    }

    // -> serve para mudar a senha do usuario

    public function mudarSenha($novaSenha, $email, $telefone)
    {
        require_once('func.php');

        $fc = new func();

        $telefoneFormat = $fc->formatarTelefone($telefone);
        $dbHosta        = 'localhost';
        $dbUsername     = 'root';
        $dbPassword     = '';
        $dbName         = 'soft_now';
        $conn           = new mysqli($dbHosta,$dbUsername,$dbPassword,$dbName);
        $query          = "update users set senha_user = '$novaSenha' where email_user = '$email' and telefone_user = '$telefoneFormat' ";

        $result         = mysqli_query($conn,$query);
    }

    // -> serve para trazer o ID do usuario

    public function trazerIdUsuario($email, $senha)
    {
        $dbHosta        = 'localhost';
        $dbUsername     = 'root';
        $dbPassword     = '';
        $dbName         = 'soft_now';
        $conn           = mysqli_connect($dbHosta,$dbUsername,$dbPassword, $dbName);
        $sql            = "select id_user from users where email_user = '$email' and senha_user = '$senha';";
        $query          = mysqli_query($conn, $sql);
        $resultado      = mysqli_fetch_array($query);

        return $resultado['id_user'];
    }

    // -> exclui um usuario da tabela users

    public function excluirUsuario($id)
    {
        $dbHosta        = 'localhost';
        $dbUsername     = 'root';
        $dbPassword     = '';
        $dbName         = 'soft_now';
        $conn           = mysqli_connect($dbHosta,$dbUsername,$dbPassword, $dbName);
        $query          = "delete from users where id_user = $id ";

        $result         = mysqli_query($conn,$query);
    }
    
    public function telefoneUsuario($idUser)
    {
        $dbHosta        = 'localhost';
        $dbUsername     = 'root';
        $dbPassword     = '';
        $dbName         = 'soft_now';
        $conn           = mysqli_connect($dbHosta,$dbUsername,$dbPassword, $dbName);
        $query          = "select  telefone_user from users where id_user = $idUser";

        $result         = mysqli_query($conn,$query);
        $telefone       = mysqli_fetch_array($result);

        return $telefone['telefone_user'];
    }

    public function nomeUsuario($id)
    {
        $dbHosta        = 'localhost';
        $dbUsername     = 'root';
        $dbPassword     = '';
        $dbName         = 'soft_now';
        $conn           = mysqli_connect($dbHosta,$dbUsername,$dbPassword, $dbName);
        $query          = "select  nome_user, sobrenome_user from users where id_user = $id";

        $result         = mysqli_query($conn,$query);
        $valor          = mysqli_fetch_array($result);
        $nome           = $valor['nome_user'] . " ".$valor['sobrenome_user'];

        return $nome;
    }

    public function emailSenhaUsuario($id)
    {
        $dbHosta        = 'localhost';
        $dbUsername     = 'root';
        $dbPassword     = '';
        $dbName         = 'soft_now';
        $conn           = mysqli_connect($dbHosta,$dbUsername,$dbPassword, $dbName);
        $query          = "select  email_user, senha_user from users where id_user = $id";

        $result         = mysqli_query($conn,$query);
        $valor          = mysqli_fetch_array($result);

        return $valor;
    }

    public function emailAll()
    {
        $dbHosta        = 'localhost';
        $dbUsername     = 'root';
        $dbPassword     = '';
        $dbName         = 'soft_now';
        $conn           = mysqli_connect($dbHosta,$dbUsername,$dbPassword, $dbName);
        $sql            = "SELECT email_user FROM users";

        $query          = mysqli_query($conn, $sql);

        return $query;
    }

    public function emailRepetido($email)
    {
        $dbHosta        = 'localhost';
        $dbUsername     = 'root';
        $dbPassword     = '';
        $dbName         = 'soft_now';
        $conn           = mysqli_connect($dbHosta,$dbUsername,$dbPassword, $dbName);
        $sql            = "SELECT email_user FROM users where email_user = '$email'";

        $query          = mysqli_query($conn, $sql);
        $qtd            = mysqli_num_rows($query);

        return $qtd;
    }

    public function telefoneRepetido($telefone)
    {
        require_once('func.php');

        $fk = new func();

        $telefoneFormatado = $fk->formatarTelefone($telefone);
        $dbHosta           = 'localhost';
        $dbUsername        = 'root';
        $dbPassword        = '';
        $dbName            = 'soft_now';
        $conn              = mysqli_connect($dbHosta,$dbUsername,$dbPassword, $dbName);
        $sql               = "SELECT telefone_user FROM users where telefone_user = '$telefoneFormatado'";

        $query             = mysqli_query($conn, $sql);
        $qtd               = mysqli_num_rows($query);

        return $qtd;
    }

    public function logar($email, $senha)
    {
        $dbHosta        = 'localhost';
        $dbUsername     = 'root';
        $dbPassword     = '';
        $dbName         = 'soft_now';
        $conn           = mysqli_connect($dbHosta,$dbUsername,$dbPassword, $dbName);
        $sql            = "select * from users where email_user = '$email' and senha_user = '$senha';";

        $query          = mysqli_query($conn, $sql);
        $qtd            = mysqli_num_rows($query);

        return $qtd;
    }

    public function checarAlterarSenha($email, $telefone)
    {
        $dbHosta        = 'localhost';
        $dbUsername     = 'root';
        $dbPassword     = '';
        $dbName         = 'soft_now';
        $conn           = mysqli_connect($dbHosta,$dbUsername,$dbPassword, $dbName);
        $sql            = "select * from users where email_user = '$email' and telefone_user = '$telefone';";

        $query          = mysqli_query($conn, $sql);
        $qtd            = mysqli_num_rows($query);

        return $qtd;
    }

}



?>