<?php

class GatoCustom extends Exception{

    public function getMensaje(){
        return "There's no msj here";
    }

    public function getMeow(){
        return "Meow!🙀🙀";
    }

}

class ConejoCustom extends Exception{

    public function getRabbit(){
        return "🐰 dame xanaxhorias";
    }

}

try {

    $exception = readline("Which exception do u wanna throw?:");

    if ( $exception == "michi"){
        throw new GatoCustom("Wrong kittie fella");
    }else {
        throw new ConejoCustom("Wrong Rabbit broda");
    }

}catch ( GatoCustom $e ){

    echo $e->getMessage() . "\n";
    echo $e->getMeow();

}catch ( ConejoCustom $e ){

    echo $e->getMessage() . "\n";
    echo $e->getRabbit();

} finally{

    echo "\n---------- El programa terminó ----------";

}


?>