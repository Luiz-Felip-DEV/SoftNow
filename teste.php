<?php 

    require_once('.//model/Http/email.php');
    require_once('.//model/Http/func.php');
    require_once('.//model/Http/usuario.php');
    require_once('.//model/Http/produtos.php');
    require_once('./model/Http/carrinho.php');
    require_once('./model/Http/pagamento.php');


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

    $car = new carrinho();
    $pag = new pagamento();
    $em = new email();

    $valor = 10093.64;

    $email = "luizfelipe098@icloud.com";
    $nome = "Luiz Felipe";

    $em->codigoVerificação($email, $nome);



?>