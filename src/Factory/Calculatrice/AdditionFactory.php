<?php

namespace App\Factory\Calculatrice;

use App\Factory\Calculatrice\Entities\AdditionCalculation;
use App\Factory\Calculatrice\Interfaces\CalculationInterface;
use App\Factory\Calculatrice\Interfaces\OperationFactoryInterface;

class AdditionFactory implements OperationFactoryInterface
{
    public function calculationType($a, $b): CalculationInterface
    {
        return new AdditionCalculation($a, $b);
    }
}
