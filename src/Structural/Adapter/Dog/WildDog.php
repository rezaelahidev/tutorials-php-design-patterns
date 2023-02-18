<?php

namespace Learning\DesignPatterns\Structural\Adapter\Dog;

class WildDog implements WildDogInterface
{
    public function bark(): string
    {
        return 'Hop Hop :XX';
    }
}
