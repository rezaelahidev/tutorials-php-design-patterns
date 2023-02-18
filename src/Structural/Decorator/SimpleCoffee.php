<?php

namespace Learning\DesignPatterns\Structural\Decorator;

class SimpleCoffee implements Coffee
{

    public function getCost(): int
    {
        return 10;
    }
    public function getDescription(): string
    {
        return 'This is Simple Coffee';
    }
}
