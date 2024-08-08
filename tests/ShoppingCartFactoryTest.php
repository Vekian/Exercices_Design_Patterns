<?php

use App\Factory\Shopping\MyShopProductFactory;
use App\Factory\Shopping\Shop;
use PHPUnit\Framework\TestCase;

class ShoppingCartFactoryTest extends TestCase {
    
    public function testShop(){
        $factory = new MyShopProductFactory();
        $shop = new Shop($factory);
    
        $productsToList = ['BumperSticker1', 'CoffeeTableBook5'];
    
        $targetOutput = <<<EOS
        BumperSticker1 - Cool bumper sticker
        CoffeeTableBook5 - Coffee Table book
        EOS;
    
        // var_dump($targetOutput);
        // var_dump($shop->listProducts($productsToList));
        $this->assertSame($targetOutput , $shop->listProducts($productsToList));
    }
}