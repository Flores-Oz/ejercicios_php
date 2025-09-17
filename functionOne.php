<?php 

function tablaOne($j){
    $tabla = "== TABLA DEL $j ==\n";
    for ($i = 1; $i <= 10; $i++) {
        $tabla.= $j." X ".$i." = ".$i*$j."\n";
    } 
    return $tabla;
} 

echo tablaOne(1);

function tableTwo($j, $h){
    $table = "";
    while($j <= $h){
        $table .= tablaOne($j);
        $j++;
    }
    return $table;
}

echo tableTwo(2,5);