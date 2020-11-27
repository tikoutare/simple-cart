<?php

namespace SimpleCart;

class Cart implements \Countable
{
    private $items;

    /**
     * Cart constructor.
     * @param $items
     */
    public function __construct(array $items = [])
    {
        $this->items = $items;
    }

    /**
     * return the amount of items in it
     * @return int
     */
    public function count()
    {
        return count($this->items);
    }
}