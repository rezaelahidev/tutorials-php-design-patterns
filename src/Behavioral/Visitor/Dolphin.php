<?php

namespace Learning\DesignPatterns\Behavioral\Visitor;

class Dolphin implements Animal
{

    public function speak()
    {
        echo 'Tuut tuttu tuutt!';
    }

    public function accept(AnimalOperation $operation): void
    {
        $operation->visitDolphin($this);
    }
}
