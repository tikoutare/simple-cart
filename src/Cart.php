<?php

namespace SimpleCart;

class Cart implements \Countable, \ArrayAccess
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
     *
     * @return int
     */
    public function count(): int
    {
        return count($this->items);
    }

    /**
     * add a new item to the cart
     *
     * @param object $item
     * @param int $quantity
     * @return $this
     */
    public function addItem(object $item, int $quantity = 1): self
    {
        $cartItem = new CartItem($item, $quantity);
        $this->items[] = $cartItem;

        return $this;
    }

    /**
     * Remove an existing item from the cart
     *
     * @param object $item
     * @return $this
     */
    public function removeItem(object $item): self
    {
        $id = spl_object_hash($item);
        unset($this->items[$id]);

        return $this;
    }

    public function offsetExists($offset)
    {
        return isset($this->items[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->items[$offset];
    }

    public function offsetSet($offset, $value)
    {
        $this->items[$offset] = $value;

        return $this;
    }

    public function offsetUnset($offset)
    {
        unset($this->items[$offset]);
    }
}
