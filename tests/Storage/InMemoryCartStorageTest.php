<?php

namespace Tests\Storage;

use SimpleCart\Cart;
use SimpleCart\Storage\InMemoryCartStorage;
use PHPUnit\Framework\TestCase;

class InMemoryCartStorageTest extends TestCase
{
    public function testGetCart()
    {
        $cart = new Cart();
        $storage = new InMemoryCartStorage();
        $storage->save($cart);
        $this->assertNotNull($storage->getCart());
        $this->assertInstanceOf(Cart::class, $storage->getCart());
    }

    public function testDestroy()
    {
        $cart = new Cart();
        $storage = new InMemoryCartStorage();
        $storage->save($cart);
        $this->assertNotNull($storage->getCart());
        $storage->destroy();
        $this->assertNull($storage->getCart());
    }
}
