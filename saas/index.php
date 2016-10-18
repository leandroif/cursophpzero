<?php
try {
    $pdo = new PDO("mysql:dbname=saas;host=localhost","root","");
} catch (PDOException $e) {
    echo "Falhou: ".$e->getMessage();
}

$dominio = $_SERVER['HTTP_HOST'];

$sql = "SELECT * FROM usuarios where dominio = ?";
$sql = $pdo->prepare($sql);
$sql->execute(array($dominio));

if($sql->rowCount() >0 ){
    $cliente = $sql->fetch();

    if(file_exists('clientes/'.$cliente['id'].'/index.php')){
        require 'clientes/'.$cliente['id'].'/index.php';
    }
} else {
    echo "Sistema fora do ar";
}