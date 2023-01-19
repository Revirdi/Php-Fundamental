<?php

$arr = array(5,9,12,13,15,17,18);
function SquareNum($arr){
    $res = "false";
    $length = count($arr);
    for($i=0; $i < $length - 2; $i++){
        $current = $arr[$i];
        
        for($j = $i+1; $j < $length; $j++){
            $next = $arr[$j];
            $formula = pow($current, 2) + pow($next, 2);
            
            for($k = $j + 1; $k < $length; $k++){
                $check = pow($arr[$k], 2);
                if($formula == $check){
                   return $res = "true => numeric that fulfill are $current, $next, $arr[$k]";
                }
            } 
        }
    }
    return $res;
}

echo SquareNum($arr);