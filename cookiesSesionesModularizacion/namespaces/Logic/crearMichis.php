<?php

include("Classes/MichisDisponibles/Michi.php");
include("Classes/MichisAdoptados/Michi.php");

use MichisDisponibles\Gatito as MichisDisponibles; // as para renombrar
use MichisAdoptados\Gatito as MichisAdoptados;

$mrmichi = new MichisDisponibles("Mr. Michi", "Negro con tintes dorados", 103);
$mrmichi2 = new MichisDisponibles("Mr. Michi2", "Violeta con pelos salvajes", 203);
$mrmichi3 = new MichisDisponibles("Mr. Michi3", "Blanco con brillos plateados", 303);


$mrmichi_adoptado = new MichisAdoptados("Mr. Michi", new DateTime("1973-10-04"), "El cerrajero de la esquina");
$mrmichi2_adoptado = new MichisAdoptados("Mr. Michi2", new DateTime("1952-05-08"), "La profesora suplente de la escuela tecnica de la esquina");
$mrmichi3_adoptado = new MichisAdoptados("Mr. Michi3", new DateTime("2050-08-31"), "El sobrino nieto de Elon Musk");

