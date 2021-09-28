<?php
    session_start();
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';
    //Funcion de enviar correos
    function enviar($body,$correo,$alerta,$ruta,$asunto,$archivo = false){
    
        $mail = new PHPMailer(true);
    
        try {
            $mail->SMTPDebug = 0;
            $mail->isSMTP();                                            
            $mail->Host       = 'mail.demenciasemanuel.com';                       
            $mail->SMTPAuth   = true;                                  
            $mail->Username   = 'enviodecorreos@demenciasemanuel.com';       
            $mail->Password   = '1nd3_mail-*_*';                          
            $mail->SMTPSecure = 'ssl';            
            $mail->Port       = 465;                                    
    
            //Recipients
            $mail->setFrom($correo, 'Sistema Inde');
            $mail->addAddress($correo);     
    
            //Attachments
            if ($archivo) {
                $mail->addAttachment($archivo['tmp_name'], $archivo['name']);
            }
    
            //Content
            $mail->isHTML(true);                                
            $mail->Subject = $asunto;
            $mail->Body    = $body;
    
            $mail->send();
    
            $_SESSION['alerta'] = $alerta;
            header("Location:$ruta");
    
    
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    };
    // Validar Campos Formularios
    function validar($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    };
?>