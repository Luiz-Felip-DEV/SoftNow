<?php 

namespace Model\Http;

use Exception;
use mysqli;

    class carrinho{
        // classe reponsavel pela interação com a tabela carrinho do banco


        // -> insere um item ao seu carrinho

        public function adicionarCarrinho($idProd,$idUser,$nomeProd, $qtdProd, $valorProd, $descricaoProd){
            $dbHosta = 'localhost';
            $dbUsername = 'root';
            $dbPassword = '';
            $dbName = 'soft_now';
            $conn = new mysqli($dbHosta,$dbUsername,$dbPassword,$dbName);
            $query = "INSERT INTO carrinho (id_prod,id_user, nome_prod,qtd_prod,valor_prod,descript_prod) VALUES ('$idProd','$idUser', '$nomeProd', '$qtdProd', '$valorProd', '$descricaoProd')";

            $result = mysqli_query($conn,$query);
        }

        // -> traz o carrinho do usuario e coloca dentro de um array

        public function trazerCarrinhoUser($id){
            $dbHosta = 'localhost';
            $dbUsername = 'root';
            $dbPassword = '';
            $dbName = 'soft_now';
            $conn = mysqli_connect($dbHosta,$dbUsername,$dbPassword, $dbName);
            $query = "select * from carrinho where id_user = $id ";
            $result = mysqli_query($conn,$query);

            while ($row = mysqli_fetch_assoc($result)){
               $dados[] = $row;
            }
            return $dados;
        }

        // -> conta a quantidade de linhas que retornaram do banco

        public function qtdLinhas($id){
            $dbHosta = 'localhost';
            $dbUsername = 'root';
            $dbPassword = '';
            $dbName = 'soft_now';
            $conn = mysqli_connect($dbHosta,$dbUsername,$dbPassword, $dbName);
            $query = "select * from carrinho where id_user = $id ";
            $result = mysqli_query($conn,$query);
            $linhas = mysqli_num_rows($result);
            return $linhas;
        }

        // -> mostra o carrinho para o usuario

        public function mostrarCarrinho($id){
            $l = $this->qtdLinhas($id);
            $cont = 0;
            
            try{
                while ($cont < $l){
                    $carrinhoUser = $this->trazerCarrinhoUser($id);
                    echo "==================================================="."<br>";
                    $nomeProduto = $carrinhoUser[$cont]['nome_prod'];
                    $qtdProduto = $carrinhoUser[$cont]['qtd_prod'];
                    $valorProduto = $carrinhoUser[$cont]['valor_prod'];
                    $descripProduto = $carrinhoUser[$cont]['descript_prod'];
                    
                    echo "NOME: ". $nomeProduto."<br>";
                    echo "QUANTIDADE: ". $qtdProduto."<br>";
                    echo "VALOR: R$ ". $valorProduto."<br>";
                    echo "DESCRIÇÃO: ". $descripProduto."<br>";
                    $cont++;
                }
            }catch(Exception $e){
                echo "ERRO, Mensagem: ".$e->getMessage();
            }
        }

        // exlui um item especifico do carrinho

        public function excluirItemCarrinho($idUser,$id){
            $dbHosta = 'localhost';
            $dbUsername = 'root';
            $dbPassword = '';
            $dbName = 'soft_now';
            $conn = mysqli_connect($dbHosta,$dbUsername,$dbPassword, $dbName);
            $query = "delete from carrinho where id_user = $idUser and id_prod = $id ";

            $result = mysqli_query($conn,$query);
        }

        // -> limpa o carrinho do usuario

        public function limparCarrinho($id){
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