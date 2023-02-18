<?php

namespace Learning\DesignPatterns\Creational\SimpleFactory;

class WoodenDoor implements Door
{
    protected float $height;
    protected float $width;

    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getHeight(): float
    {
        return $this->height;
    }

    public function getWidth(): float
    {

        return $this->width;
    }
}
