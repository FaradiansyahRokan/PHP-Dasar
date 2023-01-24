<?php
// sintak perulangan for
// for(init Statement;kondisi;post Statement){
//     # block perulangan ...
// }

// loop Hanya Menggunakan Kondisi
$counter = 1;

for (;$counter <= 10 ;){
    echo "ini Perulangan ke : ". $counter . PHP_EOL;
    $counter++;
}
// loop Meggunakan init Statement dan kondisi
// sebenarnya variable  bisa di masukan ke dalam expression juga sebagai init statement

for( $i = 0  ; $i <= 10 ;){
    echo "loop ke " . $i .PHP_EOL;
    $i++;
}

// loop Meggunakan init Statement, kondisi dan post Statemenet
for( $i = 0  ; $i <= 10 ;  $i++){
    echo "loop ke " . $i .PHP_EOL;
}

// loop menggunakan syntax Alternative
// ketika menggunakan syntax Alternative maka simbol {} diganti dengan : , dan endfor di akhir.
for( $i = 0  ; $i <= 10 ;  $i++):
    echo "loop ke " . $i .PHP_EOL;
endfor;
?>