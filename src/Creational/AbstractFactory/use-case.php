<?php

use Learning\DesignPatterns\Creational\AbstractFactory\IronDoorFactory;
use Learning\DesignPatterns\Creational\AbstractFactory\WoodenDoorFactory;

//Wooden Door Objects use case
$woodenFactory = new WoodenDoorFactory();

echo ($woodenFactory->makeDoor())->getDescription();

breakLine();

echo ($woodenFactory->makeFitingExpert())->getDescription();

breakLine();
//============================================================================

//Iron Door Objects use case
$ironFactory = new IronDoorFactory();

echo ($ironFactory->makeDoor())->getDescription();

breakLine();

echo ($ironFactory->makeFitingExpert())->getDescription();
