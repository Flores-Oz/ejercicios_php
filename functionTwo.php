<?php

function inicializar_array($numero_de_elementos, $min, $max){
    $tabla = [];
    while (count($tabla) < $numero_de_elementos) {
        $tabla[] = random_int($min, $max);
    }
    $nedia = array_sum($tabla)/count($tabla);
    $mx = max($tabla);
    $mn = min($tabla);
    return [
        'tabla' => $tabla,
        'max'   => $mx,
        'min'   => $mn,
        'media' => $nedia
    ];
}

print_r(inicializar_array(10,1,15));