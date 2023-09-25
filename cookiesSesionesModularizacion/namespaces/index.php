<?php require("Logic/crearMichis.php"); ?> 

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


    <ul>
        <li><?= $mrmichi->getName() ?> fue adoptado por <?= $mrmichi_adoptado->getAdoptedBy() ?></li>
        <li><?= $mrmichi2->getName() ?> fue adoptado por <?= $mrmichi2_adoptado->getAdoptedBy() ?></li>
        <li><?= $mrmichi3->getName() ?> fue adoptado por <?= $mrmichi3_adoptado->getAdoptedBy() ?></li>
    </ul>


</body>
</html>