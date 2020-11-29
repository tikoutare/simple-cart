<?php

namespace Tests;

use SimpleCart\Cart;
use PHPUnit\Framework\TestCase;
use SimpleCart\CartProduct;
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
        $cart->addProduct(new FakeProduct(101, 100));
        $this->assertCount(1, $cart);
        $this->assertInstanceOf(CartProduct::class, $cart[0]);
    }

    public function testRemoveProduct()
    {
        $cart = new Cart();
        $product = new FakeProduct(101, 100);
        $cart->addProduct($product);
        $this->assertCount(1, $cart);
        $cart->removeProduct($product);
        $this->assertCount(0, $cart);
    }

    public function testGetAmount()
    {
        $cart = new Cart();
        $product = new FakeProduct(101, 10);
        $cart->addProduct($product);
        $this->assertEquals(10, $cart->getAmount());
    }
}
