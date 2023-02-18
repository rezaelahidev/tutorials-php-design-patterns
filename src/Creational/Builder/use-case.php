<?php


// Burger Order

use Learning\DesignPatterns\Creational\Builder\BurgerBuilder;

$builder = new BurgerBuilder(10);


$builder->addCheese()
    ->addTomato()
    ->addLettuce()
    ->addPepperoni();


$burger = $builder->build();


echo json_encode($builder->toArray($burger));
