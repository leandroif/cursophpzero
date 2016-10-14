<?php

$imagem = "imagem.png";

list($largura_original,$altura_original) = getimagesize($imagem);

list($largura_mini,$altura_mini) = getimagesize("mini_imagem.png");

$imagem_final  = imagecreatetruecolor($largura_original,$altura_original);

$imagem_original = imagecreatefrompng("imagem.png");
$imagem_mini = imagecreatefrompng("mini_imagem.png");

imagecopy($imagem_final,$imagem_original, 0, 0, 0, 0,
    $largura_original,$altura_original);

imagecopy($imagem_final,$imagem_mini, 100, 200, 0, 0,
    $largura_mini,$altura_mini);

//header("content-Type: image/png");
imagepng($imagem_final , "imagem_marca.png");




?>