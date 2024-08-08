<?php

namespace App\Builder\Hardware;

use App\Builder\Interfaces\ComponentInterface;

class AbstractPart implements ComponentInterface{
    private string $value;

    public function __construct(string $value) {
        $this->value = $value;
    }

    public function getValue(){
        return $this->value;
    }
}