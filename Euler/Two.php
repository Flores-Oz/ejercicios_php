<?php
$suma = 0;
$a = 1;
$b = 2;

while ($b <= 4000000) {
    //if ($b % 2 === 0) {
    //    $suma += $b;
 //   }
    $next = $a + $b;
    $a = $b;
    $b = $next;
}

echo $suma;
