<?php
require 'usuarios.php';

$u = new Usuarios();




//$u->inserir("Felipe","felippe2hotmail.com","123");


$u->atualizar("El loko","loko@hotmail.com","123",11);


$res = $u->selecionar(11);

print_r($res);

$u->excluir(10);