<?php

namespace App\Builder\Interfaces;

interface ComputerInterface
{
    public function getComponent(string $component): ComponentInterface;
};

