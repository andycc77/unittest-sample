<?php

namespace Tests\Unit;


use App\Product;
use Tests\TestCase;

class ProductTest extends TestCase
{
    public function testAProductHasAName()
    {
        $product = new Product('iphone');

        $this->assertEquals('iphone', $product->name());
    }
}