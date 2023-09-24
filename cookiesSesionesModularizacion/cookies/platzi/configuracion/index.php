<?php

setcookie(
    name: "subdomionioCookie",
    value: "Esta cookie solo esta disponible a partir del path /configuracion",
    expires_or_options: time() + 60 + 60 * 24,
    path: "/platzi/phpPlatzi/cookiesSesionesModularizacion/cookies/platzi/configuracion/",  
    domain: "localhost",
    secure: false,
    httponly: true
);


echo "<pre>";
var_dump($_COOKIE);
echo "</pre>";

?>