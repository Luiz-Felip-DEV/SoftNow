<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require_once('func.php');

class email{
    public function codigoVerificação($emai, $nome){
        //Load Composer's autoloader

        require_once('../../vendor/autoload.php');
        $mail = new PHPMailer(true);
    
        try {
            //configurações do server
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
            $mail->isSMTP();                                             
            $mail->Host       = 'smtp.gmail.com';                     
            $mail->SMTPAuth   = true;                                   
            $mail->Username   = 'softnow09@gmail.com';                     
            $mail->Password   = 'xscvjnnvprhsnpnj';                             
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
            $mail->Port       = 465;                                   
    
            //Recipients
            $mail->setFrom('softnow09@gmail.com', 'Soft Now');
            $mail->addAddress($emai, $nome);             
            $mail->addReplyTo('softnow09@gmail.com', 'Soft Now');
            
    
            //Content
            $mail->isHTML(true);                                  
            $mail->Subject = 'Codigo de Confirmação';
            $func = new func();
            $numAleat = $func->geradorCodigo();
    
            $body = "Segue o seu codigo para validar seu email.<br><br><br><br><b>codigo = $numAleat<b>";
            
            $mail->Body    = $body;
    
            $mail->send();
            echo 'E-mail enviado com sucesso!';
            return $numAleat;
        } catch (Exception $e) {
            echo "Erro ao enviar o email: {$mail->ErrorInfo}";
    }
    }
} 

?>