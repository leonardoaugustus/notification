<?php

require __DIR__ . '/lib_ext/autoload.php';
use Notification\Email;


$novoemail = new Email;
$novoemail->sendMail("Assunto de teste", "<p> Esse é um e-mail de <b> teste </b> </p>", "contato@unitibox.com.br", "Contato", "leoaugusto45@gmail.com", "Leonardo" );


