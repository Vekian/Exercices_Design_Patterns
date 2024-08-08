<?php

namespace App\Builder;

use App\Builder\Hardware\Cpu;
use App\Builder\Hardware\Gpu;
use App\Builder\Hardware\Hdd;
use App\Builder\Hardware\MotherBoard;
use App\Builder\Hardware\Ram;
use App\Builder\Hardware\Ssd;
use App\Builder\Interfaces\ComponentInterface;
use App\Builder\Interfaces\ComputerInterface;

class Computer implements ComputerInterface{

     /**
     * @var ComponentInterface[]
     */
    private array $components;

    public function __construct(array $components)
    {
        $this->components = $components;
    }

    /**
     * @param string $namespace
     * @return ComponentInterface
     * @throws \Exception
     */
    public function getComponent(string $namespace): ComponentInterface
    {
        foreach ($this->components as $component) {
            if ($component instanceof $namespace) {
                return $component;
            }
        }
        throw new \Exception("Component not found");
    }

}