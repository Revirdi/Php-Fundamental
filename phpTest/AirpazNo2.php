<?php

function FindFactor($num){
    $result = "";
    for ($i = 1; $i <= $num; $i++){
        if($i === $num){
           $result = $result . $i;
            continue;
        }
        if($num % $i === 0){
           $result = $result . "$i, ";
        }
    }
    return $result;
}

echo FindFactor(12);