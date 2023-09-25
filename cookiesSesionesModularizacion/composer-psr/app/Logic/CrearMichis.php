<?php

use App\Classes\Michi;
use App\Classes\MichisAdoptados;

function crearMichis(){

    $mrmichi = new Michi("Mr Michi", "Dorado con puntas naranjas", 33);
    $mrmichiAdoptado = new MichisAdoptados("Mr Michi", new DateTime("2023-04-10"), "Un perro");

    echo $mrmichi->sayMeow() . ". Me adopto " . $mrmichiAdoptado->getAdoptedBy();

}

?>