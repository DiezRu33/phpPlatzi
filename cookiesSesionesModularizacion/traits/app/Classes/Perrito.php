<?php

namespace App\Classes;

use App\Traits\Pet; // importar el Trait

Class Perrito{

    protected $nombre;
    protected $color;
    protected $edad;

    use Pet;

    public function __construct($nombre, $color, $edad)
    {
        $this->nombre = $nombre;
        $this->color = $color;
        $this->edad = $edad;
    }

    public function ladrar(){
        return "Waf waf🐶";
    }

    public function comer(){
        return "Dame comida gil🐶🐶";
    }

}