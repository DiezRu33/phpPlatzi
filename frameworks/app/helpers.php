<?php

if(! function_exists('view') ){
    function view($views){
        return new App\Http\Response($views);
    }
}

if(! function_exists('viewPath') ){
    function viewPath($views){
        return __DIR__ . "/../views/$views.php";
    }
}