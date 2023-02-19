<?php

namespace Learning\DesignPatterns\Behavioral\Visitor;

class Speak implements AnimalOperation
{
    public function visitMonkey(Monkey $monkey): void
    {
        $monkey->shout();
    }

    public function visitLion(Lion $lion): void
    {
        $lion->roar();
    }
    public function visitDolphin(Dolphin $dolphin): void
    {
        $dolphin->speak();
    }
}
