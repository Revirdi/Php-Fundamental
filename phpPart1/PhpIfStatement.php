<?php
$nilai1 = 70;
$nilai2 = 90;

if($nilai1 >= 75 && $nilai2 >= 75){
    echo "Anda Lulus \n";
} else if($nilai1 >= 60){
    echo "Coba Lagi \n";
} else {
    echo "Anda Tidak Lulus";
}

if($nilai1 >= 75 && $nilai2 >= 75) :
    echo "Anda Lulus \n";
elseif($nilai1 >= 60) :
    echo "Coba Lagi \n";
else :
    echo "Anda Tidak Lulus";
endif;

// Ternary Operator
$gender = "PRIA";

$hi = $gender == "PRIA" ? "Hei Bro" : "Hai Kak";

echo $hi . PHP_EOL;


// Null Coalescing Operator untuk mengecek apakah data tersebut ada atau tidak

// Tanpa Null Coalescing Operator
$data = [
    "action" => null
];

if(isset($data["action"])){
    $action = $data['action'];
} else {
    $action = 'nothing';
}
echo $action . PHP_EOL;

// Dengan Null Coalescing Operator
$action = $data['action'] ?? 'nothing';
echo $action . PHP_EOL;