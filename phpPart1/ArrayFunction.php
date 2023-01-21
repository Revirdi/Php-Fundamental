<?php

$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$dataResult = array_map(fn($data) => $data * 2, $data); // array_map(callable, array);

var_dump($dataResult);

var_dump(array_values($data));
var_dump(array_keys($data));