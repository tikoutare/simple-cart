<?php

namespace Tests\Fixtures;

class FakeProduct
{
    private int $id;
    private int $price;

    /**
     * FakeProduct constructor.
     * @param int $id
     * @param int $price
     */
    public function __construct(int $id, int $price)
    {
        $this->id = $id;
        $this->price = $price;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getPrice()
    {
        return $this->price;
    }
}
