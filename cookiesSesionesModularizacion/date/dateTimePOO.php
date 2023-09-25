<?php

// Por procedimiento / Estructurada / Funciones;

// $interval = date_interval_create_from_date_string("5 days"); // intervalo de tiempo;
// $dia = date_create(); // devuelve obj de tipo dateTime() - empty current date;
// date_add($dia, $interval);

// echo date_format($dia, "d-m-Y");

// POO

$interval = DateInterval::createFromDateString("5 days");
$date = new DateTime(); 
$date->add($interval);

echo($date->format("d-m-Y"));

// echo "\n";
?>