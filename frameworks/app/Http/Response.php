<?php

namespace App\Http;

class Response{

    protected $views; 

    public function __construct($views)
    {
        $this->views = $views;
    }

    public function getViews(){
        return $this->views;
    }

    public function send(){
        $views = $this->getViews();

        // home
        $content = file_get_contents(viewPath($views)); // almacena URI o file en string;

        require viewPath("layout");
    }

}