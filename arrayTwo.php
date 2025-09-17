<?php

$numeros = [];
$suma = 0;

for ($i = 0; $i < 10; $i++) {
    $numeros[] = random_int(1, 30);
    $suma += $numeros[$i];
}

print_r($numeros);
$promedio = $suma / count($numeros);
echo $promedio;

//version 2 ya con metodos nativos de php
$suma2 = array_sum($numeros);
$cantidad = count($numeros);
$promedio2 = $suma2/$cantidad;
echo $promedio2;