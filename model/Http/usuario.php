<?php 


class usuario {

    public function inserirUsuario($nome, $sobrenome, $email, $senha, $telefone){
        $dbHosta = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName = 'soft_now';
        $conn = new mysqli($dbHosta,$dbUsername,$dbPassword,$dbName);
        $query = "INSERT INTO users(nome_user,sobrenome_user, email_user,senha_user, telefone_user) VALUES('$nome','$sobrenome','$email','$senha', '$telefone')";
        
        $result = mysqli_query($conn,$query);
    }

    public function mudarSenha($novaSenha, $email, $telefone){
        $dbHosta = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName = 'soft_now';
        $conn = new mysqli($dbHosta,$dbUsername,$dbPassword,$dbName);
        $query = "update users set senha_user = '$novaSenha' where email_user = '$email' and telefone_user = '$telefone' ";

        $result = mysqli_query($conn,$query);
    }


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

    public function excluirUsuario($id){
            // falta implementar

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