<?php

namespace Learning\DesignPatterns\Structural\Decorator;

class WhipCoffee extends BaseDecorator
{
    public function __construct(Coffee $coffee)
    {
        $this->cost = 18;
        $this->coffee = $coffee;
    }

    public function id(): string
    {
        return 'Whip';
    }
}
