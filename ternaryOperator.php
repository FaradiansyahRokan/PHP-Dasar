<?php

// Tanpa TernaryOperator
$gender = "PRIA";
$hi = null;

if($gender == "PRIA") {
    $hi = "HI Bro!";
}else{
    $hi = "Hi nona!";
}

echo $hi . PHP_EOL;

// dengan ternaryOperator
// code ternaryOperator Menggunakan Kata Kunci ? dan :
// ? (tanda tanya) adalah nilai True , dan : (titik dua) adalah nilai false.
$kelas = "RPL";

$hi = $kelas == "RPL" ? "Hi Programmer" : "Hi Engineer";

echo $hi . PHP_EOL;

?>