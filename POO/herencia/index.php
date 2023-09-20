<?php

class User{

    public $name;

    // final = no se puede heredar
    final public function __construct($name){
        $this->name = $name;
    }

    public function getName(){
        echo $this->name;
    }
}

class Admin extends User{
    public function getName(){
        echo "soy $this->name";
    }
}

$admin = new Admin("Profe Ciruela");
echo $admin->getName();