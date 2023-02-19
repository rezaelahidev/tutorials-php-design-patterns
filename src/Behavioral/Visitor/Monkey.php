<?php

namespace Learning\DesignPatterns\Behavioral\Visitor;

class Monkey implements Animal
{

    public function shout()
    {
        echo 'Ooh oo aa aa!';
    }

    public function accept(AnimalOperation $operation): void
    {
        $operation->visitMonkey($this);
    }
}
