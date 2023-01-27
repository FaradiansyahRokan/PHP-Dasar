<?php

// tanpa NullCoalescingOp

$data = [
    "action" => null
];

if (isset($data["action"])) {
    $isiData = $data["action"];
} else {
    $isiData = "Tidak Ada Data Terdeteksi Atau NULL";
}

echo $isiData . PHP_EOL;

// menggunakan NullCoalescingOp
// untuk menggunakan NullCoalescingOp kita tidak perlu Menggunakan if Statement dan function isset($variable)
// Kata kunci Untuk Menggunakan NullCoalescingOp Menggunakan Simbol ?? 
// value setelah tanda ?? adalah nilai false

$dataSiswa = [
    "TB" => "hadir"
];
$kehadiran = $dataSiswa["TB"] ?? "tidakHadir";

echo $kehadiran . PHP_EOL;

?>