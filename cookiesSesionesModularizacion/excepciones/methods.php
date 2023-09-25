<?php 

try{

    $resultado = 20 / 0;
    echo $resultado;

}catch( Throwable $e ){

    // echo $e->getMessage();
    // echo $e->getCode();
    // echo $e->getFile(); 
    // echo $e->getLine();
    var_dump($e->getTrace()); // obtener pasos para llegar al error;

}

echo "<br>";
?>