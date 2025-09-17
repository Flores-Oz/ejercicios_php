<?php

$numeros = [];
$max = 0;

for ($i = 0; $i < 10; $i++) {
    $numeros[] = random_int(1, 30);
    if($numeros[$i] > $max){
        $max = $numeros[$i];
    }
}

sort($numeros, SORT_ASC); 
print_r($numeros);
//echo $max;
echo max($numeros);
echo min($numeros);