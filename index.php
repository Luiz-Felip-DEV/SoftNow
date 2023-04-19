<?php

use Model\Http\carrinho;
use Model\Http\favoritos;
use Model\Http\pagamento;

    require_once('./model/Http/carrinho.php');
    require_once('./model/Http/favoritos.php');
    require_once('./model/Http/pagamento.php');
    require_once('./model/Http/produtos.php');
    require_once('./model/Http/usuario.php');
    require_once('./model/Http/historico.php');

    /**
     * $prod = new carrinho();
     * $id = 5;
     * $nomeProd = "Limao";
     * $qtdProd = 4;
     * $valorProd = 45.59;
     * $descript = "Limão Verde, e muito saboroso";
     *  $prod ->adicionarCarrinho($id,$nomeProd, $qtdProd, $valorProd, $descript);
     */
    

    $prod = new pagamento();
    $user = new usuario();
    $carr = new carrinho();
    $fav = new favoritos();
    $his = new historico();
    
    $id = 2;
    $num_cartao = "999-999-999-21";
    $nomeCartao = "Matheus Alves";
    $dataVencimento = "05/2025";
    $cv = "980";
    //$prod->atualizarDados($num_cartao, $nomeCartao, $dataVencimento, $cv, $id);

    $idUser = 4;
    $idProd = 7;
    $nomeProd = "Monitor Apple";
    $qtd = 1;
    $valor = 1700.61;
    $descript = "Monitor Confortavel";

    //$array = $carr->mostrarCarrinho($idUser);
    //$carr->adicionarCarrinho($idProd, $idUser, $nomeProd, $qtd,$valor,$descript)

    // para historico

    $iduser = 1;
    $nomeUser = "Paulo";
    $sobreNome = "Plinio";
    $nomeProduto = "Controle PS5";
    $valorProduto = 250.99;
    $quantidade = 1;
    $metodoPag = "Cartao";
    $statusPag = "TRUE";
    $vezes = 5;


    $fav->mostraFavoritos($iduser);
?>