<?php

$numeroRandom = random_int(1, 7);

for ($i = 1; $i <= 10; $i++) {
    echo $numeroRandom." X ".$i." = ".$i*$numeroRandom;
    echo "\n";  
}