<?php

namespace App\Classes;

use App\Traits\Pet;

Class Michi{

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

    public function sayMeow(){
        return "Meow😼";
    }

    public function scratch(){
        return "Deja de joder, te araño😾😾";
    }

}