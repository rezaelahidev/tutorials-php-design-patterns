<?php

namespace Learning\DesignPatterns\Creational\Builder;


class BurgerBuilder
{
    public int $size;
    public bool $cheese;
    public bool $tomato;
    public bool $lettuce;
    public bool $pepperoni;

    public function __construct(int $size)
    {
        $this->size = $size;
    }

    public function addCheese(): self
    {
        $this->cheese = true;

        return $this;
    }

    public function addTomato(): self
    {
        $this->tomato = true;

        return $this;
    }

    public function addLettuce(): self
    {
        $this->lettuce = true;

        return $this;
    }

    public function addPepperoni(): self
    {
        $this->pepperoni = true;

        return $this;
    }

    public function build(): Burger
    {
        return new Burger($this);
    }

    public function toArray(Burger $burger): array
    {
        return [
            'cheese' => $burger->getCheese(),
            'tomato' => $burger->getTomato(),
            'lettuce' => $burger->getLettuce(),
            'pepperoni' => $burger->getPepperoni(),
        ];
    }
}
