<?php

function sumaCuadrada(int $num):int{
    $sumaC = 0;
    for($i = $num; $i >= 1; $i--){
        $sumaC += pow($i, 2);
    }
    return $sumaC;
}

function sumaExponente(int $num): int{
    $sumaC = 0;
    for($i = $num; $i >= 1; $i--){
        $sumaC += $i;
    }
    return pow($sumaC,2);
}

$num = sumaExponente(100) - sumaCuadrada(100);
echo $num;