<?php

interface Search{
    public function all();
}

class User implements Search{
    public function all(){
        echo "Obteniendo a los Usuarios, XML";
    }
}

class Post implements Search{
    public function all(){
        echo "Obteniendo a los Posts, JSON";
    }
}

$user = new User();
echo $user->all();
echo "<pre></pre>";

$post = new Post();
echo $post->all();