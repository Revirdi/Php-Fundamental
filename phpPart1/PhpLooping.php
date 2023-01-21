<?php

// for loop

use function PHPSTORM_META\map;

for ($i = 1; $i <=10; $i++){
    echo "$i" . PHP_EOL;
}

for($i = 1; $i <=5; $i++):
    echo "$i" . PHP_EOL;
endfor;

// while loop

$counterWhile = 1;

while($counterWhile <= 4){
    echo "$counterWhile" . PHP_EOL;
    $counterWhile++;
}

while($counterWhile <= 4):
    echo "$counterWhile" . PHP_EOL;
    $counterWhile++;
endwhile;


// do while loop
$counterDoWhile = 1;
do{
    echo "$counterDoWhile" . PHP_EOL;
    $counterDoWhile++;
} while ($counterDoWhile <= 3);

// For Each

$names = ["Ardwiyan", "Revirdi", "Ehe"];

foreach($names as $value){
    echo "$value" . PHP_EOL;
}

$person = [
    "first_name" => "Ardwiyan",
    "last_name" => "Revirdi",
    "title" => "Programmer"
];

foreach($person as $key => $value){
    echo "$key : $value" . PHP_EOL;
}