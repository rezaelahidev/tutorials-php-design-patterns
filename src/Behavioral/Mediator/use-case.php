<?php

use Learning\DesignPatterns\Behavioral\Mediator\ChatRoom;
use Learning\DesignPatterns\Behavioral\Mediator\User;

$mediator = new ChatRoom();
$john = new User('John Doe', $mediator);
$jane = new User('Jane Doe', $mediator);
$john->send('Hi there!');
breakLine();
$jane->send('Hey!');
