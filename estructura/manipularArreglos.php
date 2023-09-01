<?php

$edades = [18, 22, 34];

// count(): cuantos elementos hay
array_push($edades, 33); // push al array;
is_array($edades); // es un arreglo en bool;
/* 
$listaFrutas = "frutilla,uva,pera,naranja"; 
$listaFrutasArray = explode(",", $listaFrutas); // string a array, ('separador a identificar', string);
*/

$michis = [
    "Michi Uno" => [
        "nombre" => "Michisansio",
        "ocupacion" => "Programador",
        "color" => "Azúl carmesí con destellos dorados",
        "comida"=> [
            "favorita" => "Pollo a la crema con espinaca",
            "no favorita" => "Pollo a la crema con brocolí",
        ]
        ],

    "Michi Dos" => [
        "nombre" => "Michi Micho",
        "ocupacion" => "Rapero underground",
        "color" => "Negro con puntos violetas en los bordes y efectos rosados dinámicos",
        "comida"=> [
            "favorita" => "Milanesa con puré de la vieja",
            "no favorita" => "Pizza de ugi's",
        ]
        ],

    "Michi Tres" => [
        "nombre" => "Roberto Carlos",
        "ocupacion" => "Magnate, apostador nato y portero de escuela publica",
        "color" => "Amarillo con siluetas grices, sobretodo si incluye colores cálidos",
        "comida"=> [
            "favorita" => "Panqueques con verduras cocinados por Gustof",
            "no favorita" => "La comida que prepara él mismo",
        ]
    ]
];

echo ("Data del primer michi llamado " . $michis["Michi Uno"]["nombre"] . ".\n" .
"Ocupación: " . $michis["Michi Uno"]["ocupacion"] . ".\n" .
"Color favorito: " . $michis["Michi Uno"]["color"] . ".\n" .
"Comida favorita: " . $michis["Michi Uno"]["comida"]["favorita"] . ".\n" .
"Comida que odia: " . $michis["Michi Uno"]["comida"]["no favorita"] . ".\n\n"
);

echo ("Data del primer michi llamado " . $michis["Michi Dos"]["nombre"] . ".\n" .
"Ocupación: " . $michis["Michi Dos"]["ocupacion"] . ".\n" .
"Color favorito: " . $michis["Michi Dos"]["color"] . ".\n" .
"Comida favorita: " . $michis["Michi Dos"]["comida"]["favorita"] . ".\n" .
"Comida que odia: " . $michis["Michi Dos"]["comida"]["no favorita"] . ".\n\n"
);

echo ("Data del primer michi llamado " . $michis["Michi Tres"]["nombre"] . ".\n" .
"Ocupación: " . $michis["Michi Tres"]["ocupacion"] . ".\n" .
"Color favorito: " . $michis["Michi Tres"]["color"] . ".\n" .
"Comida favorita: " . $michis["Michi Tres"]["comida"]["favorita"] . ".\n" .
"Comida que odia: " . $michis["Michi Tres"]["comida"]["no favorita"] . ".\n"
);

echo "\n";

?>
