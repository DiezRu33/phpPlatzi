<?php

// Sucesión de Fibonacci;

$numeroTienda = (int) readline("Numero de tienda?: \n");
$anterior = 0;
$actual = 1;

for( $i = 2; $i <= $numeroTienda; $i++){
    
    $temporal = $actual;
    $actual += $anterior;
    $anterior = $temporal;

}
    echo "Hay $actual formas distintas de llegar";

echo "\n"
?>