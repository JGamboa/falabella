<?php

namespace Src;

class Falabella
{
    public $multipleOf3;
    public $multipleOf5;
    public $value;

    public static $toCalculate = [
        3,
        5,
    ];

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function isMultipleOf($calculate){
        $this->{'multipleOf' . $calculate} = $this->value % $calculate;
    }
}