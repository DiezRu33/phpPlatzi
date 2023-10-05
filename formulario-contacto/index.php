<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Formulario de Contacto</title>
</head>

<?php

include 'mail.php';

function validateForm($name, $email, $subject, $message)
{
    return !empty(trim($name)) && !empty(trim($email)) && !empty(trim($subject)) && !empty(trim($message));
}

$status = "";

if( isset($_POST["form"]) )
{
    //ARRAY UNPACKING, toma los datos del arreglo por POST y los manda a los parametros de la funcion (...$_(?));
    if(validateForm($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message']))
    {
        $name = htmlentities($_POST["name"]);
        $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
        $subject = htmlentities($_POST["subject"]);
        $message = htmlentities($_POST["message"]);

        $body = "$name <$email> te env&iacute;a el siguiente mensaje: <br><br> $message";

        // Mandar el correo;
        sendMail($subject, $body, $email, $name, true);

        $status = "success";
    }
    else
    {
        $status = "danger";
    }
}

?>



<body>

<?php if($status == "danger"): ?>
    <div class="alert_danger">
    <span>Surgió un problema</span>
</div>
<?php endif; ?>

<?php if($status == "success"): ?>
<div class="alert_success">
    <span>¡Mensaje enviado con éxito!</span>
</div>
    <?php endif; ?>
    
    <form action="./" method="POST">

    <h1>¡Contáctanos!</h1>

    <div class="input-group">
        <label for="name">Nombre:</label>
        <input type="text" required name="name" id="name">
    </div>

    <div class="input-group">
        <label for="email">Correo:</label>
        <input type="email" name="email" id="email">
    </div>

    <div class="input-group">
        <label for="subject">Asunto:</label>
        <input type="text" name="subject" id="subject">
    </div>

    <div class="input-group">
        <label for="message">Mensaje:</label>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
    </div>

    <div class="button-container">
        <button type="submit" class="button" name="form">Enviar</button>
    </div>

        <div class="info">
            <span><i class="fas fa-map-marker-alt"></i> 13 Saw Mill Circle, North Olmested</span>
        </div>
    

    <div class="info">
        <span><i class="fas fa-phone"></i> +33 15-3224-3422</span>
    </div></form>

    <script src="https://kit.fontawesome.com/bbff992efd.js"></script>
    
</body>
</html>