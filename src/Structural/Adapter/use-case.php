<?php

use Learning\DesignPatterns\Structural\Adapter\{
    Hunter,
    AsianLion,
    AfricanLion,
    Dog\WildDog,
    WildDogAdapter
};

$wildDog = new WildDog();

$wildDogAdapter = new WildDogAdapter($wildDog);

$hunter = new Hunter();

echo $hunter->hunt($wildDogAdapter);

breakLine();

echo $hunter->hunt(new AfricanLion());

breakLine();

echo $hunter->hunt(new AsianLion());
