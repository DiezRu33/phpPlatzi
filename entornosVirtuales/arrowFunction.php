<?php

// $cajero  = 0;
// $agregarCajero = fn($agregar) => $cajero + $agregar;
// echo $agregarCajero(20);


$edades = [1,2,3,5,20,100,20,2];
// $mayorDeEdad = array_filter($edades, function($current){
//     return $current >= 18;
// });


// funcion anonima con sintaxis mas corta = arrowFunction=>
$mayorDeEdad = array_filter($edades, fn($current) => $current >= 18);
// print_r($mayorDeEdad);

echo "\n";

?>