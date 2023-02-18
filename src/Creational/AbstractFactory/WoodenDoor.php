<?php

namespace Learning\DesignPatterns\Creational\AbstractFactory;

class WoodenDoor implements Door
{

    public function getDescription(): string
    {

        return 'I am a wooden door';
    }
}
