<?php

$json = file_get_contents("http://curso.pc/json");
$json = json_decode($json);

$obj = new StdClass();
$obj->codigo = 111;
$obj->cidade = "São Paulo";
$obj->uf = "SP";
$obj->baixa = 01;
$obj->alta = 03;
$obj->ico = 2;
$obj->frase = "alguma coisa";
$obj->data = "...";
$obj->dia_mes = "Janeiro";
$obj->dia_semana = "Alguma";
$obj->selecionada = 1;

$json->previsao[] = $obj;

echo "Cidades retornadas: ".count($json->previsao)."<br/><br/>";

foreach($json->previsao as $item) {
    echo "Cidade: ".$item->cidade." - Baixa: ".$item->baixa." - Alta: ".$item->alta." - (".$item->frase.")<br/><br/>";
}