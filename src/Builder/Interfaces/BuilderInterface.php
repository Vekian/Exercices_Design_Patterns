<?php

namespace App\Builder\Interfaces;


interface BuilderInterface
{
    public function setPart(ComponentInterface $component): BuilderInterface;

    public function getComputer(): ComputerInterface;
}
