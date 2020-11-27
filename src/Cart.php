<?php

namespace SimpleCart;

class Cart implements \Countable
{
    private $products;

    /**
     * Cart constructor.
     * @param $products
     */
    public function __construct(array $products = [])
    {
        $this->products = $products;
    }


    public function count()
    {
        return count($this->products);
    }
}