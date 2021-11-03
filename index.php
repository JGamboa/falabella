<?php

require_once __DIR__ . '/vendor/autoload.php';

use Src\Falabella;
use Src\Show;

for($i = 1; $i <= 100; $i++){
    $falabella = new Falabella($i);

    foreach(Falabella::$toCalculate as $value){
        $falabella->isMultipleOf($value);
    }

    $show = new Show($falabella);
    $show->toScreen();
}