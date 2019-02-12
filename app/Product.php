<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2019/2/12
 * Time: 9:35 AM
 */

namespace App;


class Product
{

    protected $name;
    protected $price;
    /**
     * Product constructor.
     */
    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function name()
    {
        return $this->name;
    }

    public function price()
    {
        return $this->price;
    }

    public function setDiscount($discount)
    {
        $this->price *= ($discount/10);
    }
}