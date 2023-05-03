<?php

    require_once('./model/Http/carrinho.php');
    require_once('./model/Http/favoritos.php');
    require_once('./model/Http/pagamento.php');
    require_once('./model/Http/produtos.php');
    require_once('./model/Http/usuario.php');
    require_once('./model/Http/historico.php');
    require_once('./model/Http/func.php');

    
    // retorna para a página de login

   header("Location: View/login.php");
?>