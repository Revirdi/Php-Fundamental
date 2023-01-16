<?php

$values = array(1, 2, 3, 4);
var_dump($values);

$names = ["Ardwiyan", "Revirdi", "Pusing"];
var_dump($names);

echo $values[2]; // 3

$values[2] = 90;
echo "\n";
echo $values[2];
echo "\n";
echo count($names); // 3 sama seperti length di js

$dwi = array(
    "id" => "1",
    "name" => "Ardwiyan Revirdi",
    "age" => 26
);

var_dump($dwi);
