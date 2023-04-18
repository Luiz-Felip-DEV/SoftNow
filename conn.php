<?php 

namespace Model\conn;
use mysqli;

class conn{

    function __construct()
    {
        $dbHosta = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName = 'soft_now';
        $conn = new mysqli($dbHosta,$dbUsername,$dbPassword,$dbName);
    }
}

    // -> Insere um Usuario no banco de dados
    function inserirUsuario($nome, $sobrenome, $email, $senha, $telefone){
        $dbHosta = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName = 'soft_now';
        $conn = new mysqli($dbHosta,$dbUsername,$dbPassword,$dbName);
        $query = "INSERT INTO users(nome_user,sobrenome_user, email_user,senha_user, telefone_user) VALUES('$nome','$sobrenome','$email','$senha', '$telefone')";
        
        $result = mysqli_query($conn,$query);
    }

    // -> Insere um cartão para pagamentos no app

    function dadosPagamento($id, $num_cartao, $nome_cartao,$data_vencimento, $cv_cartao){
        $dbHosta = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName = 'soft_now';
        $conn = new mysqli($dbHosta,$dbUsername,$dbPassword,$dbName);
        $query = "INSERT INTO dados_pagamento(id, num_cartao, nome_cartao, data_vencimento, cv_cartao) VALUES ('$id', '$num_cartao', '$nome_cartao', '$data_vencimento', '$cv_cartao')";

        $result = mysqli_query($conn,$query);
    }

    // -> Insere produtos no carrinho, id no banco não está auto inclement

    function adicionarCarrinho($idProd,$nomeProd, $qtdProd, $valorProd, $descricaoProd){
        $dbHosta = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName = 'soft_now';
        $conn = new mysqli($dbHosta,$dbUsername,$dbPassword,$dbName);
        $query = "INSERT INTO carrinho (id_prod, nome_prod,qtd_prod,valor_prod,descript_prod) VALUES ('$idProd', '$nomeProd', '$qtdProd', '$valorProd', '$descricaoProd')";

        $result = mysqli_query($conn,$query);
    }

    // -> Insere dados aos favoritos

    function adicionarFavoritos($idUser, $idProdut, $nomeProdut, $fotoProd, $valorProd){
        $dbHosta = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName = 'soft_now';
        $conn = new mysqli($dbHosta,$dbUsername,$dbPassword,$dbName);
        $query = "INSERT INTO favoritos (id_usuario, id_prod, nome_prod, foto_prod, valor_prod) VALUES ('$idUser', '$idProdut', '$nomeProdut', '$fotoProd', '$valorProd')";

        $result = mysqli_query($conn,$query);
    }





?>