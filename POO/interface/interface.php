<?php

interface Person 
{
    public function getName();
}

class Admin implements Person{
    public $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function getName(){
        echo "El nombre del admin es " . $this->name;
    }
}

$admin = new Admin('Papanamericano');
echo $admin->getName();