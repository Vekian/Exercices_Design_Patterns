<?php

namespace App\Factory\Calculatrice\Interfaces;

interface CalculationInterface 
{
    public function __construct($a, $b);
    public function calculate(): float;
}