<?php
class homeController extends controller {

    public function __construct() {

    }

    public function index() {

        $dados = array();

        $portfolio = new portfolio();

        $dados['portfolio'] = $portfolio->getTrabalhos(8);

        $this->loadTemplate('home',$dados);

    }

    public function sobre() {
        $dados  = array();
        $this->loadTemplate('sobre', $dados);

    }

}