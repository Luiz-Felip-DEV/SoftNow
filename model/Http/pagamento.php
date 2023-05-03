<?php 

    class pagamento{
        // classe reponsavel pela interação com a tabela dados_pagamento do banco

        // insere dados de pagamento ao banco

        function dadosPagamento($id, $num_cartao, $nome_cartao,$data_vencimento, $cv_cartao, $tipo){
            $dbHosta = 'localhost';
            $dbUsername = 'root';
            $dbPassword = '';
            $dbName = 'soft_now';
            $conn = new mysqli($dbHosta,$dbUsername,$dbPassword,$dbName);
            $query = "INSERT INTO dados_pagamento(id_user, num_cartao, nome_cartao, data_vencimento, cv_cartao, tipo) VALUES ('$id', '$num_cartao', '$nome_cartao', '$data_vencimento', '$cv_cartao', '$tipo')";
    
            $result = mysqli_query($conn,$query);
        }

        // exclui metodos de pagamento

        public function excluirDadoPagamento($id){
            $dbHosta = 'localhost';
            $dbUsername = 'root';
            $dbPassword = '';
            $dbName = 'soft_now';
            $conn = new mysqli($dbHosta,$dbUsername,$dbPassword,$dbName);
            $query = "delete from dados_pagamento where id_user = $id; ";

            $result = mysqli_query($conn,$query);
        }

        // função responsavel por atualizar os dados de pagamento no banco
        
        public function atualizarDados($numCartao,$nomeCartao, $dataVencimento, $cvCartao, $id, $tip){
            $dbHosta = 'localhost';
            $dbUsername = 'root';
            $dbPassword = '';
            $dbName = 'soft_now';
            $conn = new mysqli($dbHosta,$dbUsername,$dbPassword,$dbName);
            $query = "update dados_pagamento set num_cartao = '$numCartao', nome_cartao = '$nomeCartao', data_vencimento = '$dataVencimento', cv_cartao = '$cvCartao', tipo = '$tip' where id_user = $id;";

            $result = mysqli_query($conn,$query);
        }

        public function formatarValor($valor){
            return number_format($valor,2,",",".");
        }

        // finaliza a compra a vista

        public function finalizarCompraVista($pagClient, $idClient){
            require_once('carrinho.php');
            require_once('func.php');
            $car = new carrinho();
            $fc = new func();

            $valor = $car->calculaValorCompra($idClient);

            if ($valor == $this->formatarValor($pagClient)){
                $mes = "Pagamento realizado com sucesso, Obrigado por comprar na Soft Now";
                echo "Pagamento realizado com sucesso, Obrigado por comprar na Soft Now";
                $fc->alertaTela($mes);
            }else if ($valor > $this->formatarValor($pagClient)){
                $pendencia = $valor - $this->formatarValor($pagClient);
                $mes = "Pagamento não concluido, ainda falta $this->formatarValor($pendencia)";
                echo "Pagamento não concluido, ainda falta $this->formatarValor($pendencia)";
                $fc->alertaTela($mes);
            }else{
                $mes = "Pagamento realizado com sucesso, Obrigado por comprar na Soft Now, o valor a mais passado será extornado a sua compra";
                echo "Pagamento realizado com sucesso, Obrigado por comprar na Soft Now, o valor a mais passado será extornado a sua compra";
            }
        }
        
        // a mexer nessa função ainda

        public function finalizarCompraParc($pagClient, $vzs, $idClient){
            require_once('carrinho.php');
            require_once('func.php');
            $car = new carrinho();
            $fc = new func();

            $valor = $car->calculaValorCompra($idClient) / $vzs;

            if (doubleval($valor) == doubleval($pagClient)){
                $mes = "Pagamento realizado com sucesso, Obrigado por comprar na Soft Now";
                echo "Pagamento realizado com sucesso, Obrigado por comprar na Soft Now";
                $fc->alertaTela($mes);
            }else if (doubleval($valor) > doubleval($pagClient)){
                $pendencia = doubleval($pagClient) - doubleval($valor);
                $mes = "Pagamento não concluido, ainda falta $pendencia";
                echo "Pagamento não concluido, ainda falta $pendencia";
                $fc->alertaTela($mes);
            }else{
                $pendencia = doubleval($valor) - doubleval($pagClient);
                $mes = "Pagamento realizado com sucesso, Obrigado por comprar na Soft Now, o valor a mais passado será extornado a sua compra";
                echo "Pagamento realizado com sucesso, Obrigado por comprar na Soft Now, o valor a mais passado será extornado a sua compra";
            }
    }
    }


?>