<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2019/2/12
 * Time: 3:53 PM
 */

namespace Tests\Unit;


use App\Order;
use App\Product;
use Tests\TestCase;

class OrderTest extends TestCase
{
    protected $order;
    protected $product;
    protected $productTwo;

    public function setUp()
    {
        $this->order = new Order;
        $this->product = new Product('iWatch', 3000);
        $this->productTwo = new Product('MacBook', 2000);
    }
    
    /** @test */
    public function an_order_consists_products()
    {
        $this->order->add($this->product);
        $this->order->add($this->productTwo);

        $this->assertCount(2, $this->order->products());
    }

    /** @test */
    public function we_can_get_total_cost_from_all_products_of_an_order()
    {
        $this->order->add($this->product);
        $this->order->add($this->productTwo);

        $this->assertEquals(5000, $this->order->total());
    }
}
