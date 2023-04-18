<?php

use Model\Http\carrinho;
use Model\Http\favoritos;
use Model\Http\pagamento;

    require_once('./model/Http/carrinho.php');
    require_once('./model/Http/favoritos.php');
    require_once('./model/Http/pagamento.php');
    require_once('./model/Http/produtos.php');
    require_once('./model/Http/usuario.php');

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
    
    $id = 2;
    $num_cartao = "999-999-999-21";
    $nomeCartao = "Matheus Alves";
    $dataVencimento = "05/2025";
    $cv = "980";
    //$prod->atualizarDados($num_cartao, $nomeCartao, $dataVencimento, $cv, $id);

    $fav->removerFavorito(2,2);

?>