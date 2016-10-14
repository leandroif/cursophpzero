<?php

class Pessoa {

    private $nome;
    private $idade;

    public static function getInstance() {

        static $instance = null;

        if($instance === null){
            $instance = new Pessoa();
        }
        return $instance;
    }

    private function __construct() {

    }

    public function setNome($n) {
        $this->nome = $n;
    }

    public function  getNome() {
        return $this->nome;
    }

    public function setIdade($n) {
        $this->idade = $n;
    }

    public function  getIdade() {
        return $this->idade;
    }
}

$cara = Pessoa::getInstance();
$cara->setNome("Leandro");

$cara2 = Pessoa::getInstance();
$cara2->setIdade(90);

echo "nome 2: ".$cara2->getNome();
echo "<br/>idade 2: ".$cara->getIdade();