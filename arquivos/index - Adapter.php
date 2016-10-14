<?php

class Pessoa {

    private $nome;
    private $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function  getNome() {
        return $this->nome;
    }

    public function  getIdade() {
        return $this->idade;
    }
}

class PessoaAdapter {
    private $sexo;
    private $pessoa;

    public function __construct(Pessoa $pessoa) {
        $this->pessoa = $pessoa;
    }

    public function setSexo($e){
        $this->sexo = $e;
    }

    public function getSexo(){
        return $this->sexo;
    }

    public function  getNome() {
        return $this->pessoa->getNome();
    }

    public function  getIdade() {
        return $this->pessoa->getIdade();
    }

}

$pessoa = new Pessoa("Leandro",90);


$pa = new PessoaAdapter($pessoa);
$pa->setSexo("masculino");

echo "<br/>Nome: ".$pa->getNome();
echo "<br/>Idade: ".$pa->getIdade();
echo "<br/>Sexo: ".$pa->getSexo();

