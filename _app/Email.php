<?php

namespace Notification;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use stdClass;

class Email {

    private $mail = stdClass::class;

    public function __construct()
    {
        $this->mail = new PHPMailer(true);
        $this->mail->SMTPDebug = 2;                      // Enable verbose debug output
        $this->mail->isSMTP();                                            // Send using SMTP
        $this->mail->Host       = 'unitibox.com.br';                    // Set the SMTP server to send through
        $this->mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $this->mail->Username   = 'contato@unitibox.com.br';                     // SMTP username
        $this->mail->Password   = 'senha';                               // SMTP password
        $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $this->mail->Port       = 587;   
        $this->mail->CharSet =  'utf-8';
        $this->mail->setLanguage('br');
        $this->mail->isHTML(true);
        
            //Recipients
        $this->mail->setFrom('contato@unitibox.com.br', 'Equipe Unitibox');
        
    }


    public function sendMail ($subject, $body, $replayEmail, $replayName, $addressEmail, $addressName) {
     
        $this->mail->Subject = (string)$subject;
        $this->mail->Body = $body;

        $this->mail->addReplyTo($replayEmail, $replayName);
        $this->mail->addAddress($addressEmail, $addressName);

        try {
         $this->mail->send();       
        } catch (Exception $e) {
            echo "erro ao enviar o e-mail {$this->mail->ErrorInfo} {$e->getMessage()} ";
            //throw $th;
        }
    }
}