<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

// USING: https://packagist.org/packages/phpmailer/phpmailer;

// usando PHPmailer
require("vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

function sendMail($subject, $body, $email, $name, $html = false)
{

    // Configuracion inicial del servidor
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.gmail.com';
    $phpmailer->SMTPAuth = true;
    $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    // puerto seguro:
    $phpmailer->Port = 465;
    $phpmailer->Username = 'diiegoruffa@gmail.com';
    // contraseña de aplicacion de gmail
    $phpmailer->Password = 'gglqxeobgajpavvm';


    // Añadiendo destinatarios
    $phpmailer->setFrom('mark@facebook.com', 'Mark Zuckerberg');
    $phpmailer->addAddress($email, $name);


    // Definiendo el contenido de mi Email
    $phpmailer->isHTML($html); 
    $phpmailer->Subject = $subject;
    $phpmailer->Body    = $body;
    // $phpmailer->AltBody = 'This is the body in plain text for non-HTML mail clients';

    // Mandar el correo;
    $phpmailer->send();
}

?>
</body>
</html>