<?php 

namespace Model\Http;

use Model\conn\conn;
use mysqli;

require_once('carrinho.php');

    class favoritos{
        // Classe com ligação com a tabela favoritos do banco de dados
        
        function adicionarFavoritos($idUser, $idProdut, $nomeProdut, $fotoProd, $valorProd){
            $dbHosta = 'localhost';
            $dbUsername = 'root';
            $dbPassword = '';
            $dbName = 'soft_now';
            $conn = new mysqli($dbHosta,$dbUsername,$dbPassword,$dbName);
            $query = "INSERT INTO favoritos (id_usuario, id_prod, nome_prod, foto_prod, valor_prod) VALUES ('$idUser', '$idProdut', '$nomeProdut', '$fotoProd', '$valorProd')";

            $result = mysqli_query($conn,$query);
        }

        public function removerFavorito($idUsu, $idProd){
            $dbHosta = 'localhost';
            $dbUsername = 'root';
            $dbPassword = '';
            $dbName = 'soft_now';
            $conn = new mysqli($dbHosta,$dbUsername,$dbPassword,$dbName);
            $query = "delete from favoritos where id_usuario = '$idUsu' and id_prod = '$idProd'";

            $result = mysqli_query($conn,$query);
        }



    }

?>