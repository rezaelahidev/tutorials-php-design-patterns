<?php

use Learning\DesignPatterns\Structural\Proxy\LabDoor;
use Learning\DesignPatterns\Structural\Proxy\SecuredDoor;

$door = new SecuredDoor(new LabDoor());

$door->open('invalid'); // Big no! It ain't possible.

breakLine();

$door->open('$ecr@t'); // Opening lab door

breakLine();

$door->close(); // Closing lab door