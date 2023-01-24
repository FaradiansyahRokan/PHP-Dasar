<?php

goto a;
echo "Hello World" . PHP_EOL;

a: 
echo "p BY 1" . PHP_EOL;

$counter = 1;

while(true){
    echo "ini Adalah While ke $counter" . PHP_EOL;
    $counter++;

    if($counter > 10){
        goto end;
        
    }
    
}
end:
echo "ini akhir" . PHP_EOL;






