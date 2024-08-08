<?php

namespace App\Factory\Ship;

use App\Factory\Ship\Entities\BigUfoShip;
use App\Factory\Ship\Entities\EnnemyShip;
use App\Factory\Ship\Entities\RocketShip;
use App\Factory\Ship\Entities\UfoShip;
use App\Factory\Ship\Interfaces\ShipInterface;

class ShipFactory {
    public function getShip($shipCode): ShipInterface
    {
        $ship = match($shipCode) {
            'E' => new EnnemyShip(),
            'R' => new RocketShip(),
            'U' => new UfoShip(),
            'B' => new BigUfoShip(),
            default => throw new \Exception('Unknown ship')
        };
        return $ship;
    }
}