<?php 


class usuario {

    // -> insere um usuario na tabela users do banco

    public function inserirUsuario($nome, $sobrenome, $email, $senha, $telefone){
        $dbHosta = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName = 'soft_now';
        $conn = new mysqli($dbHosta,$dbUsername,$dbPassword,$dbName);
        $query = "INSERT INTO users(nome_user,sobrenome_user, email_user,senha_user, telefone_user) VALUES('$nome','$sobrenome','$email','$senha', '$telefone')";
        
        $result = mysqli_query($conn,$query);
    }

    // -> serve para mudar a senha do usuario

    public function mudarSenha($novaSenha, $email, $telefone){
        $dbHosta = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName = 'soft_now';
        $conn = new mysqli($dbHosta,$dbUsername,$dbPassword,$dbName);
        $query = "update users set senha_user = '$novaSenha' where email_user = '$email' and telefone_user = '$telefone' ";

        $result = mysqli_query($conn,$query);
    }

    // -> serve para trazer o ID do usuario

    public function trazerIdUsuario($email, $senha){
        $dbHosta = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName = 'soft_now';
        $conn = mysqli_connect($dbHosta,$dbUsername,$dbPassword, $dbName);
        $sql = "select id_user from users where email_user = '$email' and senha_user = '$senha';";
        $query = mysqli_query($conn, $sql);
        $resultado = mysqli_fetch_array($query);

        return $resultado['id_user'];
    }

    // -> exclui um usuario da tabela users

    public function excluirUsuario($id){
            $dbHosta = 'localhost';
            $dbUsername = 'root';
            $dbPassword = '';
            $dbName = 'soft_now';
            $conn = mysqli_connect($dbHosta,$dbUsername,$dbPassword, $dbName);
            $query = "delete from users where id_user = $id ";

            $result = mysqli_query($conn,$query);
    }
    
}



?>