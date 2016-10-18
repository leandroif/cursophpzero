<?php
class portfolioController extends controller {

    public function __construct() {

    }

    public function index() {

        $dados = array();

        $portfolio = new portfolio();

        $dados['portfolio'] = $portfolio->getTrabalhos();

        $this->loadTemplate('portfolio',$dados);

    }


}