<?php

namespace Learning\DesignPatterns\Creational\AbstractFactory;


class IronDoorFactory implements DoorFactory
{

    public function makeDoor(): Door
    {
        return new IronDoor();
    }

    public function makeFitingExpert(): DoorFittingExpert
    {
        return new Welder();
    }
}
