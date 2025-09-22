<?php

function palindromo(int $n): bool {
    $result = 0;
    $original = $n;

    while ($n > 0) {
        $rem = $n % 10;
        $result = $result * 10 + $rem;
        $n = intdiv($n, 10);
    }

    return $result === $original;
}

$maxPalindromo = 0;
$factor1 = 0;
$factor2 = 0;

for ($i = 999; $i >= 100; $i--) {
    for ($j = $i; $j >= 100; $j--) {
        $producto = $i * $j;

        echo "Probando: $i x $j = $producto\n";

        if ($producto <= $maxPalindromo) {
            break;
        }

        if (palindromo($producto)) {
            $maxPalindromo = $producto;
            $factor1 = $i;
            $factor2 = $j;
        }
    }
}

echo "\nMayor palíndromo encontrado: $maxPalindromo = $factor1 × $factor2\n";
