<?php

namespace App\Factory\Ship\Interfaces;

interface ShipInterface {
    public function getDmg(): int;

    public function getDescription(): string;
}