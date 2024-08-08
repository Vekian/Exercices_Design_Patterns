<?php

namespace App\Builder\Interfaces;

interface MasterInterface
{
    public function setBuilder(BuilderInterface $builder): void;
    public function getBuilder();
    public function build(): ComputerInterface;
}
