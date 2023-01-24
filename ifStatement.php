<?php 

$nama = "rokan";
$kelas = "RPL";

if ($nama == "rokan" && $kelas == "RPL") {
    echo "Selamat Datang $nama Di Kelas $kelas" . PHP_EOL;
}

// if/else Statement
$nilai = 90;
$absen = 90;

if($nilai >= 90 && $absen >= 90){
    echo "Selamat Anda Lulus" . PHP_EOL;
}elseif($nilai >= 80 && $absen >= 80){
    echo "Nilai Anda B" . PHP_EOL;
}
 else {
    echo "Coba Lagi Tahun Depan" . PHP_EOL;
}

// Switch Statement
$nilai1 = "A";

switch ($nilai1){
    case "A" :
        echo "Anda Hebat" . PHP_EOL;
        break;
    case "B" :
    case "C" :
        echo "Bagus" . PHP_EOL;
        break;
    case "D" :
        echo "Lebih Semangat" . PHP_EOL;
        break;
    default :
        echo "GK usah Sekolah" . PHP_EOL;

}

?>