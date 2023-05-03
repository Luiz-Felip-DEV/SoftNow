<?php 

    require_once('.//model/Http/email.php');
    require_once('.//model/Http/func.php');
    require_once('.//model/Http/usuario.php');
    require_once('.//model/Http/produtos.php');
    require_once('./model/Http/carrinho.php');
    require_once('./model/Http/pagamento.php');
    require_once('./model/Http/favoritos.php');


    //$telefone = "34992472620";
    //$fu = new func();
    //$novoTelefone = $fu->formatarTelefone($telefone);
    //echo $novoTelefone;
    
    //$prod = new produtos();
    //$nome = "Mouse Gamer Redragon Cobra, Chroma RGB";
    //$valor = 2950.59;
    //echo $prod->trazerIdProd($nome);
    //$novaVa = 358.90;
    //$prod->alterarValorProd(6, $novaVa);

    //$user = new usuario();

    //echo $user->trazerIdUsuario('marcelasilva12@yahoo.com.br', 'braba1234');

    // valor compra: 11.093,64

   $fv = new favoritos();
   $car = new carrinho();

//    $idUs = 2;
//    $idPro = 10;
//    $nomeProd = "IPHONE 12";
//    $foto = "IPHONE 12";
//    $valorProd = 4530.50;

   $car->tirarUmProduto(20, 1);

?>