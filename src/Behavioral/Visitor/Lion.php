<?php

namespace Learning\DesignPatterns\Behavioral\Visitor;

class Lion implements Animal
{

    public function roar()
    {
        echo 'Roaaar!!';
    }

    public function accept(AnimalOperation $operation): void
    {
        $operation->visitLion($this);
    }
}
