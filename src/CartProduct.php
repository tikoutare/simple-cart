<?php

namespace SimpleCart;

/**
 * Class CartItem
 * @package SimpleCart
 * @internal
 */
class CartProduct
{
    private object $product;
    private int $quantity;

    public function __construct(object $product, int $quantity = 1)
    {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    /**
     * @return object
     */
    public function getProduct(): object
    {
        return $this->product;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @return float|int
     */
    public function getAmount()
    {
        return $this->product->getPrice() * $this->getQuantity();
    }
}
