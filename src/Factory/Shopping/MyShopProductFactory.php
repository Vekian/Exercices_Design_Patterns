<?php

namespace App\Factory\Shopping;

use App\Factory\Shopping\Entities\MyShopProduct;
use App\Factory\Shopping\Interfaces\ProductFactoryInterface;
use ShopingCartFramework\ProductInterface;


// @TODO implement MyShopProductFactory with internal database of:
//        $database = [
//            'BumperSticker1' => 'Cool bumper sticker',
//            'CoffeeTableBook5' => 'Coffee Table book',
//        ];


class MyShopProductFactory implements ProductFactoryInterface {
    protected $database = [
        'BumperSticker1' => 'Cool bumper sticker',
        'CoffeeTableBook5' => 'Coffee Table book'
    ];
    public function createProduct($productCode)
    {
        return new MyShopProduct($productCode, $this->database[$productCode]);
    }
}