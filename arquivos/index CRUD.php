<?php
require 'banco.php';

$banco = new Banco("localhost","blog","root","");

$banco->query("select * from usuarios");

$numero = $banco->numrows();

echo "ewewe :".$numero."<br/>";
echo "<hr/>";

if ($banco->numrows()>0) {
    foreach ($banco->result() as $usuario) {
        echo "Nome: " . $usuario['nome'] . "<br/>";
        echo "Email: " . $usuario['email'] . "<br/>";
        echo "<hr/>";
    }
} else {
    echo "sem resultados";
}

//$banco->insert("posts", array(
//    "titulo" => 'Titulo teste',
//    "corpo" => 'Corpo teste'
//));

//$banco->update("posts",
//        array("titulo"=>"TITULO TESTE"),
//        array("id"=>"1"));

$banco->delete("posts", array("id"=>"2"));