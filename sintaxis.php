<?php

 
/*$persona = [
    "Carlos" => 22,
    "Mario" => 23,
    "Maria" => 24];
/*

/*  var dump mas informacion -----------
    var_dump($persona);

    print_r mas legible pero menos informacion
    print_r($persona);
*/



/* define("NUMERO_PI", 3.14);
    echo NUMERO_PI, "\n";
*/



/* tipos de datos forzados (casting) -------------
(int), (integer) - forzado a integer;
(bool), (boolean) - forzado a boolean;
(float), (double), (real) - forzado a float;
(string) - forzado a string;
(array) - forzado a array;
(object) - forzado a object;
(unset) - forzado a NULL (PHP 5);
*/


/* --- <=> operador 'nave espacial' ---
$resultado = 1 <=> 2;  || -1;
$resultado1 = 2 <=> 2;  || 0;
$resultado2 = 2 <=> 1;  || 1;  

echo $resultado . "\n";
echo $resultado1 . "\n";
echo $resultado2 . "\n";
*/


/* operacion de null 
devuelva la variable que este asignada en primera instancia ---
$nombreDePepe = "Pepito Grillo";
echo $nombreDeMario ?? $nombreDePepe;
*/

/* Precedencia */

$contador = 1;
$resultado = $contador++;

echo $contador . "\n";
echo $resultado;


echo "\n";

?>