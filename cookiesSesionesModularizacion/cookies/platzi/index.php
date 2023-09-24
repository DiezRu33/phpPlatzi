<?php

if( !isset($_COOKIE["ejemploCookie"]) ){
    setcookie(
    name: "ejemploCookie",
    value: "gatito",
    expires_or_options: time(), // duracion de la cookie en segundos;
    path: "/", // dir de la url disponible, '/' => cualquier parte del path/dir;
    domain: "localhost", // unicamente disponible en ese dominio;
    secure: false, // solo se activa la cookie con dominio seguro(stl, https),
    httponly: true // solo accedidas desde el font ej javascript => valor booleano;
    );

    echo "¡Creada la cookie!";
}

echo "<pre>";
var_dump($_COOKIE);
echo "</pre>";
?>