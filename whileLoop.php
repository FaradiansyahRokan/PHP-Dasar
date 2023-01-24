<?php
// while adalah contoh perulangan yang lebih sederhana di banding forLoop, karna di while loop kita tidak menggunakan init dan post statement.

$w  = 1;
while ($w <= 10) {
    echo "ini adalah perulangan ke $w" . PHP_EOL;
    $w++;
}
// syntax Alternative di while sama dengan syntaax Alternative di forLoop, yakni sama menggunakan :, dan endwhile di akhir
$w  = 1;
while ($w <= 10) :
    echo "ini adalah perulangan ke $w" . PHP_EOL;
    $w++;
endwhile;
?>