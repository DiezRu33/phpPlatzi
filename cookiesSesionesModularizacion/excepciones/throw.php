<?php

$nombre = readline("Nombre y apellido:");

if( $nombre != "" )
{
    try {
    
        $saldoActual = 0;
        $ingresarPlata = readline("Hola $nombre, cuanto dinero queres depositar en tu cuenta?: ");
        $dineroFinal = 0;
            
        if( $ingresarPlata >= 1){

            $dineroFinal = ($saldoActual + $ingresarPlata);
            echo "!Genial¡ En tu cuenta con U\$D$saldoActual depositaste U\$D$ingresarPlata en tu cuenta de banco.\nTu saldo final es de U\$D$dineroFinal";

        }else{
            throw new Exception("¡Lo sentimos, la cantidad U\$D$dineroingresada no es correcta!");
        }
        
    }catch( Throwable $e ){

        echo $e->getMessage();

    }
}else 
    echo "Lo sentimos, tu nombre de usuario es incorrecto...";





echo "\n";