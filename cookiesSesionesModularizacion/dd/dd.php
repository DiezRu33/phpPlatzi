<?php

require("vendor/autoload.php"); // para usar dd() se necesita importar autoload;

class Michi{

    protected $patas = [];
    protected $color;


    function __construct(string $color)
    {
        $this->color = $color;

        for($i = 0; $i < 4; $i++)
            $this->patas[$i] = new PataDeMichi();
        
    }
}

class PataDeMichi{
    protected $uñas = 4;
    protected $descripcion = "Tiene manchas";

    function getObtenerDescripcion() :string{
        return $this->descripcion;
    }
}

$casaDeMichis = array(

    "nombre" => "Michilandia",
    "ubicacion" => [
        "pais" => "Zambia",
        "ciudad" => "Lusaka",
        "colonia" => "Tribu Arkham",
        "numero" => 33
    ],
    "numeroDeMichis" => 3,
    "michis" => [
        new Michi("blanco con decoloraciones turquesas"),
        new Michi("negro con tintes dorados"),
        new Michi("violeta con degrade tinteado al gris")
    ]
);

dd($casaDeMichis);
?>