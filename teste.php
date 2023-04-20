<?php 

    require_once('.//model/Http/email.php');


    $em = new email();
    $email = "luizfelipe098@icloud.com";
    $nome = "Luiz Felipe";
    $em->codigoVerificação($email, $nome);

?>