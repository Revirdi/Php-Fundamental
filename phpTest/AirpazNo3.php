<?php

function LongestWord($sen){
 $result = "";
 $array = explode(" ", $sen);
 foreach($array as $word){
    if(strlen($word) > strlen($result)){
        $result = $word;
    }
 }
 return $result;
}

echo LongestWord("this music was good");