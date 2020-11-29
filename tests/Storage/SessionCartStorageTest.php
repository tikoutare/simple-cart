<?php

namespace Tests\Storage;

use SimpleCart\Cart;
use SimpleCart\Storage\InMemoryCartStorage;
use PHPUnit\Framework\TestCase;
use SimpleCart\Storage\SessionCartStorage;

class SessionCartStorageTest extends TestCase
{
    /**
     *
     * @throws \Exception
     */
    public function testGetCart()
    {
        $this->markTestSkipped('Todo: test sessions');
        $cart = new Cart();
        $storage = new SessionCartStorage();
        $storage->save($cart);
        $this->assertNotNull($storage->getCart());
        $this->assertInstanceOf(Cart::class, $storage->getCart());
    }
}
