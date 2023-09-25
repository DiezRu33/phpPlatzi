<?php

namespace App\Classes;

    class MichisAdoptados{
        protected $name;
        protected $dateAdopted;
        protected $adoptedBy;

        function __construct($name, $dateAdopted, $adoptedBy)
        {
            $this->name = $name;
            $this->dateAdopted = $dateAdopted;
            $this->adoptedBy = $adoptedBy;
        }

        public function getAdoptedBy()
        {
            return $this->adoptedBy;
        }


        public function getDateAdopted()
        {
            return $this->dateAdopted;
        }

        public function getName()
        {
            return $this->name;
        }
        
    }
