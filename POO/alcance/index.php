<?php

// ----------- public ------------
class PublicUser{
    public $name = "Leo Messi";
}
$nombrePublico = new PublicUser;
echo $nombrePublico->name;
echo "<pre></pre>";

// ---------- protected ----------
class ProtectedName{
    protected $name;
}
class ProtectedUser extends ProtectedName{

    public function getName($nombre){
        echo $this->name = $nombre;
    }
}

$nombreProtegido = new ProtectedUser;
$nombreProtegido->getName("Andres Iniesta");
echo "<pre></pre>";

// ---------- private ----------
// nada fuera de la clase puede acceder a sus funciones y variables;
class PrivateName{
    private $name; // variable disponible solo en clase PrivateName;
}

