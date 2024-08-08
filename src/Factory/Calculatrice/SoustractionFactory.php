<?php

namespace App\Factory\Calculatrice;

use App\Factory\Calculatrice\Entities\SoustractionCalculation;
use App\Factory\Calculatrice\Interfaces\CalculationInterface;
use App\Factory\Calculatrice\Interfaces\OperationFactoryInterface;

class SoustractionFactory implements OperationFactoryInterface
{
    public function calculationType($a, $b): CalculationInterface
    {
        return new SoustractionCalculation($a, $b);
    }
}
