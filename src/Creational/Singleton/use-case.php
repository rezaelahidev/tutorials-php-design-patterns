<?php

use Learning\DesignPatterns\Creational\Singleton\Singleton;

$instance1 = Singleton::getInstance();
$instance2 = Singleton::getInstance();

echo $instance1 === $instance2 ? 'Equal' : 'Not Equal';
