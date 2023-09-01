<?php
/*  
function suma($a, $b){
    echo "La suma de $a + $b es: " . ($a+$b) . "\n";
}
$numeros = [1, 2];
suma(...$numeros);
*/

/* 
...$params de forma dinámica;
function sumaInfinita(...$params){
    $suma = 0;
    forEach($params as $numero){
        $suma += $numero;
    }
    echo "El resultado de la suma es " . $suma . "\n";
}
sumaInfinita(1, 2, 3);
*/

/* 
function freddy(){
    $numeroAleatorio = rand(1,4);
    $fraseFreddy = "";
    switch ($numeroAleatorio){
        case 1:
            $fraseFreddy = "Nunca pares de aprender";
            break;
        case 2:
            $fraseFreddy = "Empresas = No family";
            break;
        case 3:
            $fraseFreddy = "Tecno = Future";
        case 4:
            $fraseFreddy = "AMO PHP. 💚";
            break;
    }
    return $fraseFreddy;
}
echo freddy();
*/

/* 
$preciosCafe = [12, 5, 3, 15, 20, 23, 19, 13];
usort($preciosCafe, function($a, $b){
    // operador nave (-1, 0, 1) para acomodar valores de un array;
    return $a <=> $b;
});
var_dump($preciosCafe);
/*




echo "\n";

?>