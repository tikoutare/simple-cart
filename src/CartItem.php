<?php

namespace SimpleCart;

/**
 * Class CartItem
 * @package SimpleCart
 * @internal
 */
class CartItem
{
    private object $item;
    private int $quantity;

    public function __construct(object $item, int $quantity = 1)
    {
        $this->item = $item;
        $this->quantity = $quantity;
    }
}
