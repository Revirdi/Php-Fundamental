<?php
$name = "eko";
$age = 30;

echo "Name : ";
echo $name;
echo "\n";
echo "Umur: ";
echo $age;
echo "\n";

define("AUTHOR", "Ardwiyan Revirdi"); // author adalah nama constantnya, Ardwiyan Revirdi adalah valuenya
define("APP_VERSION", 100);
echo AUTHOR;
echo "\n";
echo APP_VERSION;
echo "\n";

// mengecek data null
// is_null($variable)
// 1 = true

$name = null;
$age = 10;

echo is_null($name);
echo "\n";
// echo is_null($age);
var_dump(is_null($age));


// isset untuk mengecheck apakah variable memiliki value atau null

$contoh = "Dwi";
$contoh = null;

var_dump(isset($contoh)); // false karna variable contoh = null