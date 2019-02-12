<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2019/2/12
 * Time: 4:14 PM
 */

namespace App;


class Order
{
    protected $products = [];

    public function add(Product $product)
    {
        $this->products[] = $product;
    }

    public function products()
    {
        return $this->products;
    }

    public function total()
    {
        $total = 0;

        foreach ($this->products as $product){
            $total += $product->price();
        }

        return $total;
    }
}