<?php

namespace App\Builder;

use App\Builder\Hardware\Cpu;
use App\Builder\Hardware\Gpu;
use App\Builder\Hardware\Hdd;
use App\Builder\Hardware\MotherBoard;
use App\Builder\Hardware\Ram;
use App\Builder\Hardware\Ssd;
use App\Builder\Interfaces\BuilderInterface;
use App\Builder\Interfaces\ComponentInterface;
use App\Builder\Interfaces\ComputerInterface;

class PCBuilder implements BuilderInterface {

    private $components = [];


    public function getComputer(): ComputerInterface
    {
        return new Computer($this->components);
    }

    public function setPart(ComponentInterface $component): BuilderInterface
    {
        $this->components[] = $component;
        return $this;
    }
}