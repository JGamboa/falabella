<?php

test('multipleOf3', function(){
    $falabella = new \Src\Falabella(3);
    $falabella->isMultipleOf(3);
    expect($falabella->multipleOf3)->toBe(0);
});

test('multipleOf5', function(){
    $falabella = new \Src\Falabella(25);
    $falabella->isMultipleOf(5);
    expect($falabella->multipleOf5)->toBe(0);
});

test('multipleOfBoth', function(){
    $falabella = new \Src\Falabella(15);
    $falabella->isMultipleOf(3);
    $falabella->isMultipleOf(5);
    $both = $falabella->multipleOf3 + $falabella->multipleOf5;
    expect($both)->toBe(0);
});

test('notMultipleOf3', function(){
    $falabella = new \Src\Falabella(4);
    $falabella->isMultipleOf(3);
    expect($falabella->multipleOf3)->toBeGreaterThan(0);
});

test('notMultipleOf5', function(){
    $falabella = new \Src\Falabella(2);
    $falabella->isMultipleOf(5);
    expect($falabella->multipleOf5)->toBeGreaterThan(0);
});

test('printsFalabella', function(){
    $falabella = new \Src\Falabella(9);

    foreach(\Src\Falabella::$toCalculate as $value){
        $falabella->isMultipleOf($value);
    }

    $show = new \Src\Show($falabella);
    $show->verify();

    expect($show->toPrint)->toBe('Falabella');
});

test('printsIT', function(){
    $falabella = new \Src\Falabella(5);

    foreach(\Src\Falabella::$toCalculate as $value){
        $falabella->isMultipleOf($value);
    }

    $show = new \Src\Show($falabella);
    $show->verify();

    expect($show->toPrint)->toBe('IT');
});

test('printsIntegraciones', function(){
    $falabella = new \Src\Falabella(15);

    foreach(\Src\Falabella::$toCalculate as $value){
        $falabella->isMultipleOf($value);
    }

    $show = new \Src\Show($falabella);
    $show->verify();

    expect($show->toPrint)->toBe('Integraciones');
});