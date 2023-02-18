<?php

namespace Learning\DesignPatterns\Creational\Builder;

class Burger
{

    protected int $size;
    protected bool $cheese;
    protected bool $tomato;
    protected bool $lettuce;
    protected bool $pepperoni;

    public function __construct(BurgerBuilder $builder)
    {
        $this->size = $builder->size;
        $this->cheese = $builder->cheese;
        $this->tomato = $builder->tomato;
        $this->lettuce = $builder->lettuce;
        $this->pepperoni = $builder->pepperoni;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function getCheese(): bool
    {
        return $this->cheese;
    }

    public function getTomato(): bool
    {
        return $this->tomato;
    }

    public function getLettuce(): bool
    {
        return $this->lettuce;
    }

    public function getPepperoni(): bool
    {
        return $this->pepperoni;
    }
}
