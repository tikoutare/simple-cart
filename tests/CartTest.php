<?php

use SimpleCart\Cart;
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
    public function testCartCreation()
    {
        $cart = new Cart();
        $this->assertInstanceOf(Cart::class, $cart);
    }
}
