<?php

require __DIR__ . '/../lib_ext/autoload.php';
use Notification\Email;


$novoemail = new Email(2, "unitibox.com.br", "contato@unitibox.com.br", "Unitibox123@","tls", "587", "contato@unitibox.com.br", "Equipe Unitibox");

$novoemail->sendMail("Assunto de teste", "<p> Esse é um e-mail de <b> teste </b> </p>", "contato@unitibox.com.br", "Contato", "leoaugusto45@gmail.com", "Leonardo" );


