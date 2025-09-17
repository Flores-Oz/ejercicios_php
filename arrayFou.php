<?php

$persona = ["Antonio"=>"31", "María"=>"28", "Juan"=>"29", "Pepe"=>"27"];

echo "Ordenado por valor (ascendente):\n";
asort($persona);
print_r($persona);

echo "Ordenado por valor (descendente):\n";
arsort($persona);
print_r($persona);

echo "Ordenado por clave (ascendente):\n";
ksort($persona);
print_r($persona);

echo "Ordenado por clave (descendente):\n";
krsort($persona);
print_r($persona);
