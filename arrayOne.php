<?php

$numeros = [];

for ($i = 0; $i < 10; $i++) {
    $numeros[] = random_int(1, 30);
}

print_r($numeros);
