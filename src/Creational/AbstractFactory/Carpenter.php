<?php

namespace Learning\DesignPatterns\Creational\AbstractFactory;

class Carpenter implements DoorFittingExpert
{

    public function getDescription(): string
    {

        return 'I can only fit wooden doors.';
    }
}
