<?php

namespace App\Factory\Shopping;

use App\Factory\Shopping\Shop;
use App\Factory\Shopping\MyShopProductFactory;
    
$shop = new Shop(new MyShopProductFactory);

$productsToList = ['BumperSticker1', 'CoffeeTableBook5'];

$targetOutput = <<<EOS
BumperSticker1 - Cool bumper sticker
CoffeeTableBook5 - Coffee Table book
EOS;

assert($targetOutput == $shop->listProducts($productsToList));