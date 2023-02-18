<?php

use Learning\DesignPatterns\Structural\Decorator\{
    Coffee,
    WhipCoffee,
    MilkCoffee,
    SimpleCoffee
};

function printCoffeeDetails(Coffee $coffee)
{
    echo "{$coffee->getDescription()} ===>  Cost: {$coffee->getCost()}";

    breakLine();
}

$sc = new SimpleCoffee;

printCoffeeDetails($sc);


$mc = new MilkCoffee($sc);

printCoffeeDetails($mc);

$wh_c = new WhipCoffee($mc);

printCoffeeDetails($wh_c);
