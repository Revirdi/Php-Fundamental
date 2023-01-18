<?php

function ReverseWord($sen){
    $array = explode(" ", $sen);
    $index = 0;
    $result = [];
        for($i = count($array)-1; $i >= 0; $i--){
        $result[$index] = $array[$i];
        $index++;
    }
    return implode(" ", $result);
}

echo ReverseWord("this music was good");