<?php

namespace Learning\DesignPatterns\Creational\AbstractFactory;

interface DoorFactory
{
    public function makeDoor(): Door;

    public function makeFitingExpert(): DoorFittingExpert;
}
