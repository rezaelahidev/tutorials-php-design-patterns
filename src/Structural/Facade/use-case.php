<?php

use Learning\DesignPatterns\Structural\Facade\{
    Computer,
    ComputerFacade
};

$computer = new ComputerFacade(new Computer());
$computer->turnOn(); // Ouch! Beep beep! Loading.. Ready to be used!
$computer->turnOff(); // Bup bup buzzz! Haah! Zzzz