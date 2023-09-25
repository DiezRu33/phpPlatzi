<?php

namespace MichisDisponibles{
    class Gatito{
        protected $name;
        protected $color;
        protected $age;

        function __construct($name, $color, $age)
        {
            $this->name = $name;
            $this->color = $color;
            $this->age = $age;
        }


        public function getAge()
        {
            return $this->age;
        }

        public function getColor()
        {
            return $this->color;
        }

        public function getName()
        {
            return $this->name;
        }

        function sayMeow(){
            return "Meow!";
        }

    }
}

