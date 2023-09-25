<?php require("michis/Logic/crearMichis.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Los michis hablan</title>
</head>
<body>
    
    <ul>
        <li><?= $mrmichi->getName() ?> dice <?= $mrmichi->sayMeow() ?></li>
        <li><?= $mrmichi2->getName() ?> dice <?= $mrmichi2->sayMeow() ?></li>
        <li><?= $mrmichi3->getName() ?> dice <?= $mrmichi3->sayMeow() ?></li>

    </ul>


</body>
</html>