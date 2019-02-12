<?php

namespace Tests\Unit;


use App\Product;
use Tests\TestCase;

class ProductTest extends TestCase
{
    public function testAProductHasAName()
    {
        $product = new Product('iphone', 6000);

        $this->assertEquals('iphone', $product->name());
    }

    public function testAProductHasAPrice()
    {
        $product = new Product('Macbook', 10000);

        $this->assertEquals(10000, $product->price());
    }
}