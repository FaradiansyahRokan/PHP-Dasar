<?php
// sama dengan perulangan yang lain Break dapat menghentikan seluruh perulangan


$b = 1;
while (true) {
    echo "ini perulangan : $b " . PHP_EOL;
    $b++;
    if($b >= 20){
        break;
    }
}

// continue digunakan untuk menghentikan perulangan saat ini , dan melanjutkan pada perulangan berikutnya
for($c = 0; $c <= 100; $c++){
    if($c % 2 == 0){
        continue;
    }
    echo "ini hanya bilangan ganjil $c" . PHP_EOL;
}
?>