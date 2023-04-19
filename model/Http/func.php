<?php 

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
    }

?>