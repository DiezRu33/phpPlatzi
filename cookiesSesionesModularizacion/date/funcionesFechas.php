<?php

// Establecer la zona horaria;
// date_default_timezone_set("Europe/London");

// // Obtener fecha actual;
// $now = date("Y-m-d H:i:s");
// // $now = new DateTime; // => POO

// // strtotime transformar cadena de texto a Unix Format (1/1/70' 00:00:00);
// echo strtotime($now);
// echo strtotime("+1 week");


// $unix_time_next_wednesday = strtotime("+3 hours");
// echo date("d-m-Y H:i:s", $unix_time_next_wednesday);
// Agregar tiempo al current date;

// Fechas inmutables ---------- 
$date_immutable = new DateTimeImmutable();

// Diferencia de Tiempo 
// $hoy = new DateTime();
// $mrMichi_nacimiento = new DateTime("1999-10-11");
// $intervalo = $mrMichi_nacimiento->diff($hoy);
// echo $intervalo->format("%y años con %d días");


// Crear desde un formato dado;
// $date = DateTime::createFromFormat("l j F Y", "Sunday 10 November 1999");
// echo $date->format("Y-m-d H:i:s");


// Modificar una fecha
$date = new DateTime();
$date->modify("+1 day +2 months");
echo $date->format("Y-m-d");



echo "\n";

