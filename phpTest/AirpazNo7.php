<?php

function DifferentNum($arr1, $arr2){
    $temp = [];
    foreach($arr1 as $value){
        $temp[$value] = $value;
    }
    foreach($arr2 as $value){
        if(!isset($temp[$value])){
            $temp[$value] = $value;
            continue;
        } 
        if(isset($temp[$value])){
            unset($temp[$value]);
        }
    }
    return array_values($temp);
}

$arr1 = [1,2,3,4,5];
$arr2 = [1,3,4,5,6];
var_dump(DifferentNum($arr1, $arr2));