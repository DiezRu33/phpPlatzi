<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

form{
    width: 100%;
    max-width: 300px;
    border-radius: 5px;
    border:1px solid #eee;
    box-shadow: -1px 8px 13px #c7c2c2;
    margin: auto;
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
    padding: 20px;
}

form > input{
    border-radius: 4px;
    border:1px solid gray;
    margin-top: 5px;
    padding: 5px;
}

form > p{
    text-transform: uppercase;
    color: #0292d4;
    font-weight: bolder;
    font-size: 13px;
    font-family: Arial, Helvetica, sans-serif;
}

form > button{
    width: 80%;
    padding: 3%;
    border-radius: 4px;
    border: none;
    background: #0292d4;
    font-weight: bold;
    color: white;
}
</style>
</head>
<body>
    
<?php

$palabras = array("sol", "luna", "cielo", "musica", "calma", "perro");

$form = "<form action='analisis.php'>";

for($i = 0; $i < count($palabras); $i++){
    $form .= "La palabra: " . str_shuffle($palabras[$i]) ." ". 
    "<input type='text' name='posicion".$i."'<br>";

    echo "\n";
    print_r($palabras[$i]);
}

$button = "<button type='submit'>Enviar</button>";
$formCierre = "</form>";

echo $form.$button.$formCierre;

echo "\n";

?>

</body>
</html>
