<?php

use Learning\DesignPatterns\Behavioral\Command\{
    Bulb,
    TurnOn,
    TurnOff,
    RemoteInvoker
};

$bulb = new Bulb();
$turnOn = new TurnOn($bulb);
$turnOff = new TurnOff($bulb);
$remote = new RemoteInvoker();
$remote->submit($turnOn); // Bulb has been lit!

breakLine();

$remote->submit($turnOff); // Darkness!