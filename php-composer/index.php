<?php

$num = (int) readline("Elegi un numero: \n");
$num2 = (int) readline("Elegi otro numero: \n");

if($num == false && $num2 == false){
    echo "Dale gil";
    echo "\n";
}else if($num >= $num2){
    echo "El numero " . $num . " es mayor o igual a " . $num2;
    echo "\n";
}else if($num <= $num2){
    echo "El numero " . $num . " es menor o igual a " . $num2;
    echo "\n";
}
echo "---- Fin del juego ----";

?>