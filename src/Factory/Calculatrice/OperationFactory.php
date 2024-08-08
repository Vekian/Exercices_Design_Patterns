<?php

namespace App\Factory\Calculatrice;

use App\Factory\Calculatrice\Interfaces\OperationFactoryInterface;

class OperationFactory {

    const pathFactory = "App\\Factory\\Calculatrice\\";

    protected $type;

    public function __construct(string $type){
        $this->type = $type;
    }
    
    public function createFactory():OperationFactoryInterface
    {
        $factoryName =  $this::pathFactory .ucfirst(strtolower($this->type))."Factory";
        if (!class_exists($factoryName)) {
            // return new Exception("Class not found", 404);
            throw new \Exception("Sorry, i can't do this ! ", 404);
        }
        return new $factoryName;
    }
}