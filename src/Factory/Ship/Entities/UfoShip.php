<?php

namespace App\Factory\Ship\Entities;

use App\Factory\Ship\Interfaces\ShipInterface;

class UfoShip implements ShipInterface {
    public function getDmg(): int {
        return 30;
    }

    public function getDescription(): string {
        return 'an ufo ship';
    }
}