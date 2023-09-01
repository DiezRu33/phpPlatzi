<?php

/*  if-else
$asientosDisponibles = 0;
$esHijoDeTomHolland = true;
$amigoDeTony = false;
$cartelera = "Juego de Tronos la Trilogía";
if($asientosDisponibles === 0){
    if($esHijoDeTomHolland){
        echo "No te creo pero podes ver la pelicula de " . $cartelera;
    }else if($amigoDeTony){
        echo "Presentame al Tony. Dale pasa no te quiero ver de vuelta acá";
    }else{
        echo "No hay más asientos disponibles brodi";
    }
}else if($asientosDisponibles <= $asientosDisponibles){
    echo "Hay " . $asientosDisponibles . " disponibles. Podes comprar la entrada";       
}
*/

/* ciclo while 
$plataDisponible = 20;
$precioCaramelo = 20;
$caramelosComprados = 0;
while ($plataDisponible >= $precioCaramelo){
    echo("Que onda broder. Estas en un kiosko y el caramelo te sale $" . $precioCaramelo . ".\n" .
    "Vos tenes disponible $" . $plataDisponible . "\n");
    $compra = readline("Lo queres comprar?: ");
        if($compra === "si" || $compra === "Si"){
            $plataDisponible -= $precioCaramelo;
            $caramelosComprados++;
            echo ("Cheto perrito. Te compraste un caramelo y ahora tenes " . $caramelosComprados . ". Te quedan $" . $plataDisponible . " ya que el caramelo te salió $" . $precioCaramelo . ".\n" );
        }else{
            echo "Bueno flaco tomatela.";
            break;
        }
}
echo "\n";
if($plataDisponible === 0 || $plataDisponible < $precioCaramelo){
    echo ("Listo flaco, no te alcanza para una mierda. Tomatela porque te surto");
}
*/

/* do-while 
$usuarios = ["Pepe123", "Michi", "Alfonso"];
var_dump($usuarios);

do {
    $usuario = readline("Por favor, decime tu nombre de usuario: ");

    echo "Tu nuevo nombre de usuario es: " . $usuario . "\n";
    array_push($usuarios, $usuario);
    var_dump($usuarios);
} while( in_array($usuario, $usuarios) );
*/ 

/* foreach as 
$tienda = [
    "Americano" => 20,
    "Latte" => 25,
    "Capuccino" => 27.5,
    "Mocca" => 30
];

$variable as $i => valor;
foreach ($tienda as $cafe => $precio) echo "El café $cafe cuesta U\$D$precio \n";
*/

$tienda = [
    "Americano" => 20,
    "Latte" => 25,
    'Recalentado' => 10,
    "Capuccino" => 27.5,
    "Mocca" => 30
];

foreach($tienda as $cafe => $precio){
    if($cafe == "Recalentado") continue;

    echo "El café $cafe es muy rico...\n";
}


echo "\n";
?>