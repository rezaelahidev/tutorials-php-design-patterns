<?php

namespace Learning\DesignPatterns\Structural\Decorator;

class MilkCoffee extends BaseDecorator
{
    public function __construct(Coffee $coffee)
    {
        $this->cost = 12;
        $this->coffee = $coffee;
    }

    public function id(): string
    {
        return 'Milk';
    }
}
