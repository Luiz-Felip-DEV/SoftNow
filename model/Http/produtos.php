<?php 

    
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



        public function trazerIdProd($nome){
            $dbHosta = 'localhost';
            $dbUsername = 'root';
            $dbPassword = '';
            $dbName = 'soft_now';
            $conn = mysqli_connect($dbHosta,$dbUsername,$dbPassword, $dbName);
            $sql = "select id_produto from produtos where nome_prod = '$nome'";
            $query = mysqli_query($conn, $sql);
            $resultado = mysqli_fetch_array($query);

            $final = (isset($resultado['id_produto'])) ?  $resultado['id_produto'] : "";

            return $final;
            }

            public function alterarValorProd($id, $precoNovo){
                $dbHosta = 'localhost';
                $dbUsername = 'root';
                $dbPassword = '';
                $dbName = 'soft_now';
                $conn = mysqli_connect($dbHosta,$dbUsername,$dbPassword, $dbName);
                $query = "update produtos set preco_prod = '$precoNovo' where id_produto = '$id'";

                $result = mysqli_query($conn,$query);


            }
    }

?>