<?php 

require_once('usuario.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

    class func{

        // serve para checar se o email está escrito corretamente
        
        public function checarEmail($email){
            if (strpos($email, '@') && strpos($email, 'gmail.com') || strpos($email, 'icloud.com') || strpos($email, 'hotmail.com') || strpos($email, 'yahoo.com') || strpos($email, 'outlook.com')){
                echo "<script>console.log('Email confirmado!') </script>";
                return true;
            }else{
                echo "<script>console.log('Email Negado!') </script>";
                return false;
            }
        }

        public function testarEmailBanco($email){
            $user   = new usuario();
            $arr    = $user->emailAll();

            while ($resultado = mysqli_fetch_array($arr)){
                    if ($resultado['email_user'] == $email){
                        return true;
                        break;
                }
        }
    }

        public function testarSenha($senha){
            $result = false;
            if (strlen($senha) >= 8){
                $result = true;
                return $result;
            }
            return $result;
        }

        public function formatarTelefone($phone)
        {
            $formatedPhone = preg_replace('/[^0-9]/', '', $phone);
            $matches = [];
            preg_match('/^([0-9]{2})([0-9]{4,5})([0-9]{4})$/', $formatedPhone, $matches);
            if ($matches) {
                return '('.$matches[1].') '.$matches[2].'-'.$matches[3];
            }
        
            return $phone;
        }

        public function geradorCodigo(){
            return rand(3000,1000000);
        }

        public function alertaTela($mensagem){
            echo '<script>alert("'.$mensagem.'");</script>';
        }

        public function logout(){
            session_destroy();
        }
    }

?>