<?php 

namespace Model\Http;
use mysqli;

    class pagamento{
        // classe reponsavel pela interação com a tabela dados_pagamento do banco


        // insere dados de pagamento ao banco

        function dadosPagamento($id, $num_cartao, $nome_cartao,$data_vencimento, $cv_cartao){
            $dbHosta = 'localhost';
            $dbUsername = 'root';
            $dbPassword = '';
            $dbName = 'soft_now';
            $conn = new mysqli($dbHosta,$dbUsername,$dbPassword,$dbName);
            $query = "INSERT INTO dados_pagamento(id, num_cartao, nome_cartao, data_vencimento, cv_cartao) VALUES ('$id', '$num_cartao', '$nome_cartao', '$data_vencimento', '$cv_cartao')";
    
            $result = mysqli_query($conn,$query);
        }

        // exclui metodos de pagamento

        public function excluirDadoPagamento($id){
            $dbHosta = 'localhost';
            $dbUsername = 'root';
            $dbPassword = '';
            $dbName = 'soft_now';
            $conn = new mysqli($dbHosta,$dbUsername,$dbPassword,$dbName);
            $query = "delete from dados_pagamento where id = $id; ";

            $result = mysqli_query($conn,$query);
        }

        // função responsavel por atualizar os dados de pagamento no banco
        
        public function atualizarDados($numCartao,$nomeCartao, $dataVencimento, $cvCartao, $id){
            $dbHosta = 'localhost';
            $dbUsername = 'root';
            $dbPassword = '';
            $dbName = 'soft_now';
            $conn = new mysqli($dbHosta,$dbUsername,$dbPassword,$dbName);
            $query = "update dados_pagamento set num_cartao = '$numCartao', nome_cartao = '$nomeCartao', data_vencimento = '$dataVencimento', cv_cartao = '$cvCartao' where id = $id;";

            $result = mysqli_query($conn,$query);
        }
    
    }


?>