<?php

// Ketika Ingin Memsaukan Default Argument Maka Letakan Di Argument Belakang
function hello($nama , $lastName = "orang"){
    echo "Hallo $nama $lastName" . PHP_EOL;
}

hello("rokan", "Subhi" );

function dataDiri($nama, $alamat, $umur, $hobi){
    echo "halo Nama Saya $nama Saya tinggal di $alamat Saya berumur $umur hobi saya Adalah $hobi". PHP_EOL;
}
dataDiri("rokan", "bandung", 16, "olahraga");