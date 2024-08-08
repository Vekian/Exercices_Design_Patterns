<?php

namespace App\Factory\Ship\Entities;

use App\Factory\Ship\Interfaces\ShipInterface;

class BigUfoShip implements ShipInterface {
    public function getDmg(): int {
        return 40;
    }

    public function getDescription(): string {
        return 'a big ufo ship';
    }
}