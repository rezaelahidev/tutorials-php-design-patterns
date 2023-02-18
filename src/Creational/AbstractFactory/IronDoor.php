<?php

namespace Learning\DesignPatterns\Creational\AbstractFactory;

class IronDoor implements Door
{

    public function getDescription(): string
    {

        return 'I am a iron door.';
    }
}
