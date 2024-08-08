<?php


use PHPUnit\Framework\TestCase;
use App\Factory\Calculatrice\OperationFactory;



class CalculatriceFactoryTest extends TestCase {
    
    public function testAdditionCalculate(){
       
        $number1 = floatval(5);
        $number2 = floatval(5);
        $factory = new OperationFactory('aDDition');
        $typeFactory  = $factory->createFactory();
        $entity = $typeFactory->calculationType($number1 ,$number2);
        $entity->calculate();

        $this->assertSame($number1 + $number2 ,$entity->calculate());
    }
    public function testSoustractionCalculate(){
       
        $number1 = floatval(5);
        $number2 = floatval(5);
        $factory = new OperationFactory('soustractioN');
        $typeFactory  = $factory->createFactory();
        $entity = $typeFactory->calculationType($number1 ,$number2);
        $entity->calculate();

        $this->assertSame($number1 - $number2 ,$entity->calculate());
    }
}