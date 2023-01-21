<?php

function penjumlahan(int $i, int $k):string{ // akan mengembalikan type data String
    $result = $i + $k;
    return $result;
}

echo penjumlahan(1, 2);
echo "\n";
// Variable Function

function sayHello(string $name, $filter){
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction(string $name):string{
    $name = strtolower($name);
    return $name . PHP_EOL;
}

sayHello("Ardwiyan", "strtoupper"); // strtoupper adalah function bawaan php untuk mengubah string menjadi uppercase;
sayHello("Revirdi", "samplefunction");

// anonymous function

function sayGoodBye(string $name, $filter){
    $finalName = $filter($name);
    echo "Good Bye $finalName" . PHP_EOL;
}

sayGoodBye("Ardwiyan", function (string $name){
    return strtoupper($name);
});

$firstName = "Ardwiyan";
$lastName = "Revirdi";

$sayHai = function () use ($firstName, $lastName){ // harus menggunakan use karena anonymous function tidak bisa memanggil variable yang ada di luar Closure
    echo "Hai $firstName $lastName" . PHP_EOL;
};

$sayHai();

// arrow function

$namaDepan = "Ardwiyan";
$namaBelakang = "Revirdi";

$sayHei = fn() => "Hello $namaDepan $namaBelakang" . PHP_EOL;

echo $sayHei();

//callback function

function sayHeeyoo(string $name, callable $filter){ // tipe data callable adalah untuk callback function
    $finalName = call_user_func($filter, $name); // filter adalah functionnya, $name adalah parameternya
    echo "Heeyoo $finalName". PHP_EOL;
}

sayHeeyoo("Dwi", function ($name) { return strtoupper($name);});
sayHeeyoo("Dwi", fn($name) => strtoupper($name));
sayHeeyoo("Dwi", "strtoupper");
sayHeeyoo("Dwi", "strtolower");

// Recursive Functiton

function factorialLoop(int $value): int{
    if($value <= 1){
        return 1;
    }
    return $value * factorialLoop($value - 1);
}

var_dump(factorialLoop(5));