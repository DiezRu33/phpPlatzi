<?php

require ("vendor/autoload.php");

use App\Classes\Perrito;
use App\Classes\Michi;

$perro = new Perrito("Mr. Perro", "marron con puntas rojo fuego", 33);
$gato = new Michi("Mr. Michi", "dorado con puntas plateadas", 33);


echo "El perro dice " . $perro->ladrar() . " mientras dice " . $perro->play();
echo "\n";

echo "El gato dice " . $gato->sayMeow() . " despues de dormir. Y se despierta diciendo: " . $gato->scratch();
echo "\n";
