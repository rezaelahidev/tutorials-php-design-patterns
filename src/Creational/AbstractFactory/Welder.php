<?php

namespace Learning\DesignPatterns\Creational\AbstractFactory;

class Welder implements DoorFittingExpert
{

    public function getDescription(): string
    {

        return 'I can only fit iron doors.';
    }
}
