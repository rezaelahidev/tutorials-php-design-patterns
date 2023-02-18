<?php

namespace Learning\DesignPatterns\Structural\Adapter;

use Learning\DesignPatterns\Structural\Adapter\Dog\WildDogInterface;

class WildDogAdapter implements LionInterface
{

    protected $dog;

    public function __construct(WildDogInterface $wildDog)
    {
        $this->dog = $wildDog;
    }

    public function roar(): string
    {
        return $this->dog->bark();
    }
}
