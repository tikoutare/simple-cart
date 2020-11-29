<?php

namespace SimpleCart\Storage;

use SimpleCart\Cart;

interface CartStorageInterface
{
    public function save(Cart $cart);

    public function destroy();
}
