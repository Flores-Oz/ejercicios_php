<?php

function findGCD($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

function findLCM($a, $b) {
    
    $gcd = findGCD($a, $b);

    $lcm = ($a * $b) / $gcd;

    return $lcm;
}

$lcm = 1;
for ($i = 2; $i <= 20; $i++) {
    $lcm = findLCM($lcm, $i);
}
echo $lcm;
 