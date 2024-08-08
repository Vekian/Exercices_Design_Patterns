<?php

namespace App\Factory\Ship\Entities;

use App\Factory\Ship\Interfaces\ShipInterface;

class RocketShip implements ShipInterface {
    public function getDmg(): int {
        return 20;
    }

    public function getDescription(): string {
        return 'a rocket ship';
    }
}