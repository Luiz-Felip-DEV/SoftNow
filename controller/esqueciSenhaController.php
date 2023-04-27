<?php 
require_once('../model/Http/usuario.php');
require_once('../model/Http/func.php');
    class esqueciSenhaController{

        public function resultadoEsqueciSenha($email, $telefone){
            $user = new usuario();
            $fc = new func();
            $telefoneFormatado = $fc->formatarTelefone($telefone);
            $resp = $user->checarAlterarSenha($email, $telefoneFormatado);
            if ($resp == 1){
                header('Location: ../View/alterarSenha.php');
                exit();
            }else{
                $mensagem = "DADOS NÃO CONFEREM NA BASE DE DADOS";
                echo '<script>alert("'.$mensagem.'");</script>';
            }
        }
    }


?>