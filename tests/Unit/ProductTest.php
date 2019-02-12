<?php

namespace Tests\Unit;


use App\Product;
use Tests\TestCase;

class ProductTest extends TestCase
{
    protected $product;

    public function setUp()
    {
        $this->product = new Product('iphone', 6000);
    }
    /** @test */
    public function a_product_has_a_name()
    {
        $this->assertEquals('iphone', $this->product->name());
    }

    /** @test */
    public function a_product_has_a_price()
    {
        $this->assertEquals(6000, $this->product->price());
    }

    /** @test */
    public function a_product_can_be_sold_with_discount()
    {
        $this->product->setDiscount(8);
        $this->assertEquals(4800, $this->product->price());
    }
}