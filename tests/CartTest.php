<?php

namespace Tests;

use SimpleCart\Cart;
use PHPUnit\Framework\TestCase;
use SimpleCart\CartItem;
use Tests\Fixtures\FakeProduct;

class CartTest extends TestCase
{
    public function testCartCreation()
    {
        $cart = new Cart();
        $this->assertInstanceOf(Cart::class, $cart);
    }

    public function testAddItem()
    {
        $cart = new Cart();
        $cart->addItem(new FakeProduct());
        $this->assertCount(1, $cart);
        $this->assertInstanceOf(CartItem::class, $cart[0]);
    }
}
