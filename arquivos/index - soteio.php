<?php
$array = array("Fulano", "Cicrano", "Beltrano", "Leandro","Lucas","Ciclano");
function sortear($qt, $array) {
    $ar = array();
    for($q=0;$q<$qt;$q++) {
        $item = aleatorio($array);
        while(in_array($item, $ar)) {
            $item = aleatorio($array);
        }
        $ar[] = $item;
    }
    return $ar;
}
function aleatorio($array) {
    $r = rand(0, count($array)-1);
    return $array[$r];
}
$sorteio = sortear(3, $array);
print_r($sorteio);
?>