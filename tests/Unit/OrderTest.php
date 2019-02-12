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
    /** @test */
    public function an_order_consists_products()
    {
        $order = new Order;
        $product = new Product('iWatch', 3000);
        $productTwo = new Product('MacBook', 2000);
        $order->add($product);
        $order->add($productTwo);

        $this->assertCount(2, $order->products());
    }

    /** @test */
    public function we_can_get_total_cost_from_all_products_of_an_order()
    {
        $order = new Order;
        $product = new Product('iWatch', 3000);
        $productTwo = new Product('MacBook', 2000);
        $order->add($product);
        $order->add($productTwo);

        $this->assertEquals(5000, $order->total());
    }
}
