<?php

namespace Learning\DesignPatterns\Behavioral\Visitor;

class Jump implements AnimalOperation
{
    public function visitMonkey(Monkey $monkey): void
    {
        echo 'Jumped 20 feet high! on to the tree!';
    }

    public function visitLion(Lion $lion): void
    {
        echo 'Jumped 7 feet! Back on the ground!';
    }
    public function visitDolphin(Dolphin $dolphin): void
    {
        echo 'Walked on water a little and disappeared';
    }
}
