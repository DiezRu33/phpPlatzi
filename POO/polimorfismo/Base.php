<?php

abstract class Tatuaje{
    protected $aguja;
    protected $maquina;
    protected $diseño;

    protected function aguja(){
        return "Hiciste una linea.";
    }
    protected function maquina(){
        return "Agarraste la máquina.";
    }
    protected function diseño(){
        return "Tenes el diseño.";
    }
}

class Proceso extends Tatuaje{

    public function __construct($aguja, $maquina, $diseño){
        $this->aguja = $aguja;
        $this->maquina = $maquina;
        $this->diseño = $diseño;
    }

    public function aguja(){
        echo "Genial. Vas a usar una aguja de $this->aguja.";
    }

    public function maquina(){
        echo "Genial. Vas a usar la maquina tipo: $this->maquina.";
    }
    
    public function diseño(){
        echo "Genial. Ya tenes el diseño elegido. Ahora tenes que pasar el stencil de $this->diseño.";
    }
}

$tatuador1 = new Proceso("9ft", "Rotativa alien head", "media manga geometrica en blanco y negro.");
$tatuador1->aguja();
echo "<pre></pre>";
$tatuador1->maquina();
echo "<pre></pre>";
$tatuador1->diseño();