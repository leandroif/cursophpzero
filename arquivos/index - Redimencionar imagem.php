<?php

$arquivo = "imagem.png";

$largura = 200;
$altura = 200;

list($larguraoriginal,$alturaoriginal) = getimagesize($arquivo);

$ratio = $larguraoriginal / $alturaoriginal;

if ($largura/$altura > $ratio){

    $largura = $altura * $ratio;

} else {

    $altura = $largura / $ratio;

}

$imagem_final = imagecreatetruecolor($largura,$altura);

$imagem_original = imagecreatefrompng($arquivo);

imagecopyresampled($imagem_final,$imagem_original,
    0, 0, 0, 0, $largura, $altura, $larguraoriginal, $alturaoriginal);

//header("content-Type: image/png");
imagepng($imagem_final, "mini_imagem.png");

echo "imagem redimencionada";