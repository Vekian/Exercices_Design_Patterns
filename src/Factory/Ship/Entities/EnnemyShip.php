<?php

namespace App\Factory\Ship\Entities;

use App\Factory\Ship\Interfaces\ShipInterface;

class EnnemyShip implements ShipInterface {
    public function getDmg(): int {
        return 10;
    }

    public function getDescription(): string {
        return 'an enemy ship';
    }
}