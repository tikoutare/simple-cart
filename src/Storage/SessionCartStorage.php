<?php

namespace SimpleCart\Storage;

use SimpleCart\Cart;

class SessionCartStorage implements CartStorageInterface
{
    private ?Cart $cart;

    public function save(Cart $cart)
    {
        if (PHP_SESSION_ACTIVE !== session_status()) {
            throw new \Exception('Session not started');
        }
        $_SESSION['cart'] = $cart;
    }

    public function getCart()
    {
        if (PHP_SESSION_ACTIVE !== session_status()) {
            throw new \Exception('Session not started');
        }
        return $_SESSION['cart'];
    }

    public function destroy()
    {
        if (PHP_SESSION_ACTIVE !== session_status()) {
            throw new \Exception('Session not started');
        }
        unset($_SESSION['cart']);
    }
}
