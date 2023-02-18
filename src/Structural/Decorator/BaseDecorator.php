<?php

namespace Learning\DesignPatterns\Structural\Decorator;

abstract class BaseDecorator implements Coffee
{

    protected $coffee;
    protected int $cost;

    public function __construct(Coffee $coffee)
    {
        $this->coffee = $coffee;
    }

    public function getCost(): int
    {
        return $this->coffee->getCost() + $this->cost;
    }

    public function getDescription(): string
    {
        return "{$this->coffee->getDescription()} {$this->id()}";
    }

    abstract protected function id(): string;
}
