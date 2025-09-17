<?php
$numero = random_int(0, 10);
echo "Nota: ".$numero. "<br>";

$calificacion = match (true) {
    $numero < 5          => 'Insuficiente',
    $numero < 6          => 'Suficiente',
    $numero < 7          => 'Bien',
    $numero < 9          => 'Notable',
    $numero <= 10        => 'Sobresaliente',
    default              => 'Fuera de rango',
};

echo $calificacion;
