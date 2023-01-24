<?php
// tanpa ForEachLoops
$name = ["rokan", "faizul", "tb", "fahmi"];

for ($i=0; $i < count($name) ; $i++) { 
    echo "Hello $name[$i]" . PHP_EOL;
}

// menggunakan forEachLoop tanpa index
foreach($name as $name){
    echo "Data $name" . PHP_EOL;
};

// menggunakan forEachLoop dengan index
foreach($name as $index => $n){
    echo "Data ke $index = $n" . PHP_EOL;
}

