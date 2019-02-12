<?php

namespace Tests\Unit;


use App\Product;
use Tests\TestCase;

class ProductTest extends TestCase
{
    /** @test */
    public function a_product_has_a_name()
    {
        $product = new Product('iphone', 6000);

        $this->assertEquals('iphone', $product->name());
    }

    /** @test */
    public function a_product_has_a_price()
    {
        $product = new Product('Macbook', 10000);

        $this->assertEquals(10000, $product->price());
    }

    /** @test */
    public function a_product_can_be_sold_with_discount()
    {
        $product = new Product('Macbook', 10000);
        $product->setDiscount(8);
        $this->assertEquals(8000, $product->price());
    }
}