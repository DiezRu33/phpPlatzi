<?php

$palabras = array("sol", "luna", "cielo", "musica", "calma", "perro");

for($i = 0; $i < count($palabras); $i++){
    if($_REQUEST["posicion".$i] == $palabras[$i]){
        echo "La palabra '" . $palabras[$i] . "' es correcta"."<br>";
    }else{
        echo "La palabra ingresada es incorrecta. La palabra correcta es '".$palabras[$i]."'</br>";
    }
}
echo "\n";
?>