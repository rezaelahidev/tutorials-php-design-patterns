<?php

namespace Learning\DesignPatterns\Creational\AbstractFactory;


class WoodenDoorFactory implements DoorFactory
{

    public function makeDoor(): Door
    {
        return new WoodenDoor();
    }

    public function makeFitingExpert(): DoorFittingExpert
    {
        return new Carpenter();
    }
}
