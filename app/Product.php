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

    /**
     * Product constructor.
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function name()
    {
        return $this->name;
    }
}