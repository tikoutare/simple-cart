<?php

namespace SimpleCart\Storage;

use SimpleCart\Cart;

class InMemoryCartStorage implements CartStorageInterface
{
    private ?Cart $cart;

    public function save(Cart $cart)
    {
        $this->cart = $cart;
    }

    public function getCart()
    {
        return $this->cart;
    }

    public function destroy()
    {
        $this->cart = null;
    }
}
