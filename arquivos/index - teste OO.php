<?php

class Post {

    private $titulo;
    private $data;
    private $corpo;
    private $comentarios;
    private $qtComentarios;



    public function getTitulo(){
        return $this->titulo;
    }

    public function setTitulo($t){
        if (is_string($t)) {
            $this->titulo = $t;
        }
    }

    public function getCorpo(){
        return $this->corpo;
    }

    public function setCorpo($t){
        if (is_string($t)) {
            $this->corpo = $t;
        }
    }

    public function addComentarios($msg){
        $this->comentarios[] = $msg;
        $this->contarComentarios();
    }

    public function getQuantosComentarios() {
        return $this->qtComentarios;
    }

    private function contarComentarios() {
        $this->qtComentarios = count($this->comentarios);
    }

}

$post = new Post();

$post->addComentarios("teste");
$post->addComentarios("teste2");
$post->addComentarios("teste3");

echo "titulo: ".$post->getQuantosComentarios();



