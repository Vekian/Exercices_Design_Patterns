<?php

namespace App\Factory\Calculatrice\Entities;

use App\Factory\Calculatrice\Interfaces\CalculationInterface;

class AdditionCalculation implements CalculationInterface {

    protected float $number1;
    protected float $number2;

    public function __construct($a, $b) {
        $this->number1 = $a;
        $this->number2 = $b;
    }
    public function calculate():float
    {
        return $this->number1 + $this->number2;
    }
}