<?php

$dadoOne = random_int(1, 7);
$dadoTwo = random_int(1, 7);

$dOne = match($dadoOne){
    1  => 'Lunes',
    2  => 'Martes',
    3  => 'Miercoles',
    4  => 'Jueves',
    5  => 'Viernes',
    6  => 'Sabado',
};

echo "Hoy es: $dia";
