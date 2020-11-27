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
     * @return $this
     */
    public function addItem(object $item): self
    {
        $id = spl_object_hash($item);
        $this->items[$id] = $item;

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

    private function getItemId(object $item)
    {
        return spl_object_hash($item);
    }
}