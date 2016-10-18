<?php
class contatoController extends controller {

    public function __construct() {

    }

    public function index() {

        $dados = array();



        $this->loadTemplate('contato',$dados);

    }

    public function sobre() {
        $dados  = array();
        $this->loadTemplate('sobre', $dados);

    }

}