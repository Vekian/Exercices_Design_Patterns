<?php

namespace App\Factory\Calculatrice\Interfaces;

use App\Factory\Calculatrice\Interfaces\CalculationInterface;

interface OperationFactoryInterface
{
    public function calculationType($a, $b): CalculationInterface;
}
