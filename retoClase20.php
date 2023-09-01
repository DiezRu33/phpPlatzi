<?php
/* 
$formatoDia = date("l F o"); // dia mes año
$formatoHora =date("G:i"); // hora(pm):minutos;
*/

$palabras = ["Mesa", "Silla", "Record", "Gol", "Caducifolio", "Adenocromo", "desoxirribonucleico", "ribosomatico", "asintomatico", "instancia"];

// Inicializamos las variables del juego;
$palabraElegida = $palabras[ rand(0, 9) ];
$palabraElegida = strtolower($palabraElegida);
$cantidadLetras = strlen($palabraElegida);
$letrasADescubrir = str_pad("", $cantidadLetras, "_");
$intentos = 0;

// limpiar CLI pantalla
function clear(){
    // version de PHP === 'windows'
    if(PHP_05 === "WINNT"){
        system('cls');
        // propen('cls','w');
    }else{
        system('clear');
    }
}

function str_contains($palabraElegida, $letraJugador)
{
   $chars = str_split($palabraElegida);
   foreach($chars as $posicionLetra){
    if($posicionLetra == $letraJugador){
        return true;
    }
   }
   return false;
}

// intnento maximos;
define("MAX_ATTEMPTS", 6);
echo "------ 🍪Juego inicializado🍪 ------.\n\n";

do {
    echo "\nPalabra de $cantidadLetras letras.\n";
    echo $letrasADescubrir . "\n";

    if($intentos === 0){
        echo "Este es tu personaje. Se llama Jimmy, cuidalo.\n";
        echo"
            +---+
            |   |
                |
                |
                |
                |
            =========
            \n";
    }

    // Pedimos que escriba;
    $letraJugador = readline("Decime una letra: ");
    $letraJugador = strtolower($letraJugador);

    if ( str_contains ($palabraElegida, $letraJugador) ){
        $offset = 0;
        // Verificamos todas las ocurrencias de esta letra para reemplazarla;
        while(
            ($posicionLetra = strpos($palabraElegida, $letraJugador, $offset))
            !== false){
            $letrasADescubrir[$posicionLetra] = $letraJugador;
            $offset = $posicionLetra + 1;
        }
    }else{
        // clear();
        $intentos++;
        echo "Letra incorrecta, te quedan ". (MAX_ATTEMPTS - $intentos) . " intentos. 🤪🤪🤪";
           if($intentos === 1) {
            echo"
            +---+
            |   |
            O   |
                |
                |
                |
            =========
            ";
           }else if($intentos === 2){
            echo"
            +---+
            |   |
            O   |
            |   |
                |
                |
            =========
            ";
           }else if($intentos === 3){
            echo"
            +---+
            |   |
            O   |
           /|   |
                |
                |
            =========
            ";
           }else if($intentos === 4){
            echo"
            +---+
            |   |
            O   |
           /|\  |
                |
                |
            =========
            ";
           }else if($intentos === 5){
            echo"
            +---+
            |   |
            O   |
           /|\  |
           /    |
                |
            =========
            ";
           }else if($intentos === 6){
            echo"
            Me mataste we
            +---+
            |   |
            O   |
           /|\  |
           / \  |
                |
            =========
            ";
           }
    }
    sleep(1);
    // clear();
    // muñeco();
} while( $intentos < MAX_ATTEMPTS && $letrasADescubrir != $palabraElegida );

clear();

if($intentos < MAX_ATTEMPTS){
    echo "Adivinaste la palabra...";
}else{
    echo "Perdiste..."; 
}

echo "\n";
echo "La palabra es $palabraElegida \n";
echo "Descubriste $letrasADescubrir \n";
echo "\n";