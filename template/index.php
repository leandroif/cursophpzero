<?php
require 'template.php';

$array = array(
    "titulo" => "Titulo da página",
    "nome" => "Fulano",
    "idade" => "56"
);

$tpl = new Template("template.phtml");
$tpl->render($array);