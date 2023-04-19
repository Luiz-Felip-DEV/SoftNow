<?php 

class historico{


    // insere dados de Compras no cartão de Credito na tabela historico_pag

    public function inserirHistoricoCartaoCredito($idUser, $nomeUser, $sobrenomeUser, $nomeProd, $valorProd,$parcela,$qtdProd, $statusPedido){
            $dbHosta = 'localhost';
            $dbUsername = 'root';
            $dbPassword = '';
            $dbName = 'soft_now';
            $conn = new mysqli($dbHosta,$dbUsername,$dbPassword,$dbName);
            $query = "INSERT INTO historico_pag (id_user,nome_user, sobrenome_user,nome_prod,valor_prod,parcela_vzs ,qtd_prod,metodo_pag, status_pedido) VALUES ('$idUser','$nomeUser', '$sobrenomeUser', '$nomeProd', '$valorProd','$parcela','$qtdProd' ,'Cartão Crédito', '$statusPedido')";

            $result = mysqli_query($conn,$query);
    }

    // -> insere dados de Compras no cartão de Debito na tabela historico_pag

    public function inserirHistoricoDebito($idUser, $nomeUser, $sobrenomeUser, $nomeProd, $valorProd,$qtdProd, $statusPedido){
            $dbHosta = 'localhost';
            $dbUsername = 'root';
            $dbPassword = '';
            $dbName = 'soft_now';
            $conn = new mysqli($dbHosta,$dbUsername,$dbPassword,$dbName);
            $query = "INSERT INTO historico_pag (id_user,nome_user, sobrenome_user,nome_prod,valor_prod,qtd_prod,metodo_pag, status_pedido) VALUES ('$idUser','$nomeUser', '$sobrenomeUser', '$nomeProd', '$valorProd','$qtdProd' ,'Cartão Débito', '$statusPedido')";

            $result = mysqli_query($conn,$query);
    }

    // -> insere dados de Compras no Pix na tabela historico_pag

    public function inserirHistoricoPix($idUser, $nomeUser, $sobrenomeUser, $nomeProd, $valorProd,$qtdProd, $statusPedido){
        $dbHosta = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName = 'soft_now';
        $conn = new mysqli($dbHosta,$dbUsername,$dbPassword,$dbName);
        $query = "INSERT INTO historico_pag (id_user,nome_user, sobrenome_user,nome_prod,valor_prod,qtd_prod,metodo_pag, status_pedido) VALUES ('$idUser','$nomeUser', '$sobrenomeUser', '$nomeProd', '$valorProd','$qtdProd' ,'Pix', '$statusPedido')";

        $result = mysqli_query($conn,$query);
    }

    // -> insere dados de Compras no Boleto na tabela historico_pag
    public function inserirHistoricoBoleto($idUser, $nomeUser, $sobrenomeUser, $nomeProd, $valorProd,$qtdProd, $statusPedido){
        
        $dbHosta = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName = 'soft_now';
        $conn = new mysqli($dbHosta,$dbUsername,$dbPassword,$dbName);
        $query = "INSERT INTO historico_pag (id_user,nome_user, sobrenome_user,nome_prod,valor_prod,qtd_prod,metodo_pag, status_pedido) VALUES ('$idUser','$nomeUser', '$sobrenomeUser', '$nomeProd', '$valorProd','$qtdProd' ,'Boleto', '$statusPedido')";

        $result = mysqli_query($conn,$query);
    }

}
?>