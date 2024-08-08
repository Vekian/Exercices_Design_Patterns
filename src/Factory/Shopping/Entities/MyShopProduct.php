<?php

namespace App\Factory\Shopping\Entities;

use App\Factory\Shopping\Interfaces\ProductInterface;

class MyShopProduct implements ProductInterface
{

    public string $code;
    public string $description;

    public function __construct(string $code, string $description) {
        $this->code = $code;
        $this->description = $description;
    }

    public function getShopProductCode()
    {
        return $this->code;
    }

    public function getShopDescription()
    {
        return $this->description;
    }
}

