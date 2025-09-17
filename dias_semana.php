<?php
$num = random_int(1, 7);
echo "Numero: ".$num. "<br>";

$dia = match($num){
    1  => 'Lunes',
    2  => 'Martes',
    3  => 'Miercoles',
    4  => 'Jueves',
    5  => 'Viernes',
    6  => 'Sabado',
    7  => 'Domingo',
};

echo "Hoy es: $dia";
