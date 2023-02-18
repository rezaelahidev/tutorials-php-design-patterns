<?php

use Learning\DesignPatterns\Structural\FlyWeight\TeaMaker;
use Learning\DesignPatterns\Structural\FlyWeight\TeaShop;

$teaMaker = new TeaMaker();
$shop = new TeaShop($teaMaker);
$shop->takeOrder('less sugar', 1);
$shop->takeOrder('more milk', 2);
$shop->takeOrder('without sugar', 5);
$shop->serve();
