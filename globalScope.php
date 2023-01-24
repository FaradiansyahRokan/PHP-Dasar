<?php

$name = "IDN";

function nama(){
    // tambahkan kata kunci global sebelum variablr agar tidak terjadi error
    global $name;
    echo $name . PHP_EOL;
}
nama();