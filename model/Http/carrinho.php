<?php 

namespace Model\Http;
use mysqli;

    class carrinho{
        // classe reponsavel pela interação com a tabela carrinho do banco

        public function adicionarCarrinho($idProd,$nomeProd, $qtdProd, $valorProd, $descricaoProd){
            $dbHosta = 'localhost';
            $dbUsername = 'root';
            $dbPassword = '';
            $dbName = 'soft_now';
            $conn = new mysqli($dbHosta,$dbUsername,$dbPassword,$dbName);
            $query = "INSERT INTO carrinho (id_prod, nome_prod,qtd_prod,valor_prod,descript_prod) VALUES ('$idProd', '$nomeProd', '$qtdProd', '$valorProd', '$descricaoProd')";

            $result = mysqli_query($conn,$query);
        }

        public function trazerCarrinhoUser($id){
            // a implementar

        }

        public function excluirItemCarrinho($id){
            $dbHosta = 'localhost';
            $dbUsername = 'root';
            $dbPassword = '';
            $dbName = 'soft_now';
            $conn = mysqli_connect($dbHosta,$dbUsername,$dbPassword, $dbName);
            $query = "delete from carrinho where id_prod = $id ";

            $result = mysqli_query($conn,$query);
        }


    }

?>