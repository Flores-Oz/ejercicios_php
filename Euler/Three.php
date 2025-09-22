<?php
function largestPrimeFactor(int $n): int {
    $last = 1;

    // Saca todos los 2
    while ($n % 2 === 0) {
        $last = 2;
        $n /= 2;
    }

    // Prueba solo impares
    $d = 3;
    while ($d * $d <= $n) {
        while ($n % $d === 0) {
            $last = $d;
            $n /= $d;
        }
        $d += 2;
    }

    // Si queda algo > 1, es primo y es el mayor
    return $n > 1 ? $n : $last;
}

echo largestPrimeFactor(13195);       // debería dar 29
echo largestPrimeFactor(600851475143);
