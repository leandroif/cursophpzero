<?php
require "usuario.php";

$usuario = new Usuario(13);
$usuario->setEmail("teste@hotmail.com");
$usuario->setSenha("123");
$usuario->setNome("Testador teste");

$usuario->salvar();

$usuario->delete();

echo "Foi";