<?php

namespace SimpleCart;

/**
 * Class CartItem
 * @package SimpleCart
 * @internal
 */
class CartProduct
{
    private IdentifiableInterface $product;
    private int $quantity;

    public function __construct(IdentifiableInterface $product, int $quantity = 1)
    {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    /**
     * @return IdentifiableInterface
     */
    public function getProduct(): IdentifiableInterface
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
}
