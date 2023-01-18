<?php

function SimpleAdding($num){
    $result = 0;
    for ($i = 1; $i <= $num; $i++){
        $result += $i;
    }
    return $result;
}

echo SimpleAdding(12);