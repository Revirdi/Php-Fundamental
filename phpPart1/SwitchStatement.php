<?php

$nilai1 = 75;
$nilai2 = 40;
$total = ($nilai1 + $nilai2) / 2;
$hasil = null;


if($total >= 75){
    $hasil = "A";
} elseif($total >= 65){
    $hasil ="B";
} elseif($total >= 55){
    $hasil = "C";
} else{
    $hasil = "D";
}


switch($hasil){
    case "A":
        echo "Anda Lulus Dengan sangat baik " . PHP_EOL;
        break;
    case "B":
        echo "Anda Lulus " . PHP_EOL;
        break;
    case "C":
        echo "Anda tidak lulus " . PHP_EOL;
        break;
    default:
        echo "Mungkin anda salah masuk jurusan" . PHP_EOL;
}

