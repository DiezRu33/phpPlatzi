<?php

namespace App;

    class Post{
        protected $comments = [];
        
        public function agregarComentario(Comment $comment){
            $this->comments[] = $comment;
        }

        public function contarComentario(){
            return count($this->comments);
        }

        public function postearComentario(){
            return $this->comments;
        }

    }

?>