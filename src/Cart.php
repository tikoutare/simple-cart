<?php

namespace SimpleCart;

class Cart implements \Countable, \ArrayAccess
{
    private array $products;

    /**
     * Cart constructor.
     * @param $products
     */
    public function __construct(array $products = [])
    {
        $this->products = $products;
    }

    /**
     * return the amount of items in it
     *
     * @return int
     */
    public function count(): int
    {
        return count($this->products);
    }

    /**
     * add a new item to the cart
     *
     * @param IdentifiableInterface $product
     * @param int $quantity
     * @return $this
     */
    public function addProduct(IdentifiableInterface $product, int $quantity = 1): self
    {
        $cartProduct = new CartProduct($product, $quantity);
        $this->products[] = $cartProduct;

        return $this;
    }

    /**
     * Remove an existing item from the cart
     *
     * @param IdentifiableInterface $product
     * @return $this
     */
    public function removeProduct(IdentifiableInterface $product): self
    {
        $this->products = array_filter($this->products, function (CartProduct $cartProduct) use ($product) {
           return $cartProduct->getProduct()->getId() !== $product->getId();
        });

        return $this;
    }

    public function offsetExists($offset)
    {
        return isset($this->products[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->products[$offset];
    }

    public function offsetSet($offset, $value)
    {
        $this->products[$offset] = $value;

        return $this;
    }

    public function offsetUnset($offset)
    {
        unset($this->products[$offset]);
    }
}
