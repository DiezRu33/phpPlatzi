<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>
<body>
        <?php if( isset($_SESSION['id']) ): ?>
            <h2>Hola <?= $_SESSION["username"] ?></h2>
            <p>Tu email es: <?= $_SESSION["email"];?>!</p>

        <?php else: ?>
            <h2>No estás logueado</h2>

        <?php endif; ?>



</body>
</html>