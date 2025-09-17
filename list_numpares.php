<?php

for ($i = 1; $i <= 100; $i++) {
    if($i%2 == 0){
        if($i%20 == 0){
            echo $i. " ";
            echo "\n";
        }else{
            echo $i." ";
        }
    }
}
