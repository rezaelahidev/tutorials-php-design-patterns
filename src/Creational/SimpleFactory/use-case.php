<?php

use Learning\DesignPatterns\Creational\SimpleFactory\MakeDoor;

$door = MakeDoor::getDoor(100, 200);

$h = $door->getHeight();

$w = $door->getWidth();

echo "Width: $w and Height: $h";
