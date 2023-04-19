<?php 

namespace Model\Http;

use Model\conn\conn;
use mysqli;
use Exception;

require_once('carrinho.php');

    class favoritos{
        // Classe com ligação com a tabela favoritos do banco de dados
        
        //adiciona um item aos favoritos
        
        function adicionarFavoritos($idUser, $idProdut, $nomeProdut, $fotoProd, $valorProd){
            $dbHosta = 'localhost';
            $dbUsername = 'root';
            $dbPassword = '';
            $dbName = 'soft_now';
            $conn = new mysqli($dbHosta,$dbUsername,$dbPassword,$dbName);
            $query = "INSERT INTO favoritos (id_usuario, id_prod, nome_prod, foto_prod, valor_prod) VALUES ('$idUser', '$idProdut', '$nomeProdut', '$fotoProd', '$valorProd')";

            $result = mysqli_query($conn,$query);
        }

        // remove um item dos favoritos

        public function removerFavorito($idUsu, $idProd){
            $dbHosta = 'localhost';
            $dbUsername = 'root';
            $dbPassword = '';
            $dbName = 'soft_now';
            $conn = new mysqli($dbHosta,$dbUsername,$dbPassword,$dbName);
            $query = "delete from favoritos where id_usuario = '$idUsu' and id_prod = '$idProd'";

            $result = mysqli_query($conn,$query);
        }

        // -> retorna quantas linhas de favoritos o usuario tem

        public function qtdFavoritos($id){
            $dbHosta = 'localhost';
            $dbUsername = 'root';
            $dbPassword = '';
            $dbName = 'soft_now';
            $conn = mysqli_connect($dbHosta,$dbUsername,$dbPassword, $dbName);
            $query = "select * from favoritos where id_usuario = $id ";
            $result = mysqli_query($conn,$query);
            $linhas = mysqli_num_rows($result);
            return $linhas;
        }

        // -> traz as informações do banco e colocam dentro de um array

        public function trazerFavoritos($id){
            $dbHosta = 'localhost';
            $dbUsername = 'root';
            $dbPassword = '';
            $dbName = 'soft_now';
            $conn = mysqli_connect($dbHosta,$dbUsername,$dbPassword, $dbName);
            $query = "select * from favoritos where id_usuario = $id ";
            $result = mysqli_query($conn,$query);

            while ($row = mysqli_fetch_assoc($result)){
               $dados[] = $row;
            }
            return $dados;
        }
        
        // -> mostra os favoritos do usuario na tela 
        
        public function mostraFavoritos($id){
            $car = new carrinho();
            $l = $this->qtdFavoritos($id);
            $cont = 0;
            try{
                while ($cont < $l){
                    $favoritosUser = $this->trazerFavoritos($id);
                    echo "==================================================="."<br>";
                    $nomeProduto = $favoritosUser[$cont]['nome_prod'];
                    $qtdProduto = $favoritosUser[$cont]['foto_prod'];
                    $valorProduto = $favoritosUser[$cont]['valor_prod'];
                    
                    echo "NOME: ". $nomeProduto."<br>";
                    echo "FOTO: ". $qtdProduto."<br>";
                    echo "VALOR: R$ ". $valorProduto."<br>";
                    $cont++;
                }
            }
        catch(Exception $e){
            echo "ERRO, Mensagem: ".$e->getMessage();
        }
            }
    }

?>