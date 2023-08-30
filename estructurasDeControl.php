<?php

$personas = [
    "Persona1" => [
        "nombre" => "Leo",
        "edad" => 20,
        "apellido" => "Messi",
    ],

    "Persona2" => [
        "nombre" => "Gatito",
        "edad" => 33,
        "apellido" => "Feroz"
    ],
];

echo 'La informacion de ' . $personas["Persona2"]["nombre"] . " es:\n" . 'Nombre completo: ' . $personas["Persona2"]["nombre"] . ' ' . $personas["Persona2"]["apellido"] . "\nEdad: " . $personas["Persona2"]["edad"] . ' años de edad.' . "\n";

echo "\n" . 'La información de ' . $personas["Persona1"]["nombre"] . " es:\nNombre completo: " . $personas["Persona1"]["nombre"] . ' ' . $personas["Persona1"]["apellido"] . "\nEdad: " . $personas["Persona1"]["edad"] . ' años de edad.';

echo "\n";
?>