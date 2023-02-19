<?php

namespace Learning\DesignPatterns\Behavioral\Visitor;

interface AnimalOperation
{
    public function visitLion(Lion $lion): void;
    public function visitMonkey(Monkey $monkey): void;
    public function visitDolphin(Dolphin $dolphin): void;
}
