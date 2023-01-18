<?php

function SortingChar($value){
    $array = str_split($value);
    $length = count($array);

    while($length>=0){
        for($j =0; $j < $length - 1; $j++){
            if($array[$j] > $array[$j+1]){
            $temp = $array[$j]; 
            $array[$j] = $array[$j+1];
            $array[$j+1] = $temp;
            }
        }
        $length--;
    }
    return implode("",$array);
}

echo SortingChar("mama");
echo "\n";
echo SortingChar(1782549);