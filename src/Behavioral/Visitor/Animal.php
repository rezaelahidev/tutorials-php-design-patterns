<?php


namespace Learning\DesignPatterns\Behavioral\Visitor;

interface Animal
{
    public function accept(AnimalOperation $operation): void;
}
