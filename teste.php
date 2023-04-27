<?php 

    require_once('.//model/Http/email.php');
    require_once('.//model/Http/func.php');
    require_once('.//model/Http/usuario.php');

    //$telefone = "34992472620";
    //$fu = new func();
    //$novoTelefone = $fu->formatarTelefone($telefone);
    //echo $novoTelefone;
    $emai = new email();

    $email = "bernadinhosilva098@gmail.com";
    $nome = "Luiz Felipe";

    $emai->codigoVerificação($email, $nome);



?>