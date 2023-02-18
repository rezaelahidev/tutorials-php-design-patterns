<?php


namespace Learning\DesignPatterns\Creational\SimpleFactory;

class MakeDoor
{

    public static function getDoor(float $width, float $height): Door
    {

        return new WoodenDoor($width, $height);
    }
}
