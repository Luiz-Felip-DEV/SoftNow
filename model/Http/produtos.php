<?php 

namespace Model\Http;
use mysqli;

    // Classe responsavel por mexer na tabela produtos do banco de dados
    class produtos{

        // adiciona um item a tabela produtos

        function adicionarProduto($nomeProd, $precoProd, $descriptProd){
            $dbHosta = 'localhost';
            $dbUsername = 'root';
            $dbPassword = '';
            $dbName = 'soft_now';
            $conn = new mysqli($dbHosta,$dbUsername,$dbPassword,$dbName);
            $query = "INSERT INTO (nome_prod, preco_prod, descript_prod) VALUES ('$nomeProd', '$precoProd', '$descriptProd')";

            $result = mysqli_query($conn, $query);
        }
    }

?>