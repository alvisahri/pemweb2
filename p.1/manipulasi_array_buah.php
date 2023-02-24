<?php
$arrayBuah = ["nanas","jambu","durian","anoa"];

sort($arrayBuah); //mengurutkan sesuai abjad

array_pop("$arrayBuah"); //menghapus nilai terakhir

// unset($arrayBuah); menghapus array keseluruhan

unset($arrayBuah[1]); //menghapus salah satu

array_push($arrayBuah,"Apel"); //menambah sesuatu di bawah

array_shift($arrayBuah); //menghapus nilai paling depan

array_unshift($arrayBuah,"mangga"); //menambah nilai di atas

foreach($arrayBuah as $buah) {
    echo $buah . "<br>";
}