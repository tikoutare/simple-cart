<?php

namespace Tests\Fixtures;

use SimpleCart\IdentifiableInterface;

class FakeProduct implements IdentifiableInterface
{
    private $id;

    /**
     * FakeProduct constructor.
     * @param $id
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }
}
