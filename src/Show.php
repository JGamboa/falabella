<?php

namespace Src;

class Show
{
    public $toPrint;
    public $falabella;

    public function __construct($falabella){
        $this->falabella = $falabella;
        $this->verify();
    }

    public function verify(){
        switch($this->falabella){
            case($this->falabella->multipleOf3 == 0 && $this->falabella->multipleOf5 == 0):
                $this->toPrint = "Integraciones";
                break;

            case($this->falabella->multipleOf3 == 0):
                $this->toPrint = "Falabella";
                break;

            case($this->falabella->multipleOf5 == 0):
                $this->toPrint = "IT";
                break;

            default:
                $this->toPrint = $this->falabella->value;
        }
    }

    public function toScreen()
    {
        echo $this->toPrint . "\r\n";
    }
}