<?php

use Learning\DesignPatterns\Behavioral\Visitor\{
    Jump,
    Lion,
    Speak,
    Monkey,
    Dolphin
};

$monkey = new Monkey();
$lion = new Lion();
$dolphin = new Dolphin();
$speak = new Speak();
$monkey->accept($speak); // Ooh oo aa aa!
breakLine();
$lion->accept($speak); // Roaaar!
breakLine();
$dolphin->accept($speak); // Tuut tutt tuutt!
breakLine();


$jump = new Jump();
$monkey->accept($speak); // Ooh oo aa aa!
breakLine();
$monkey->accept($jump); // Jumped 20 feet high! on to the tree!
breakLine();
$lion->accept($speak); // Roaaar!
breakLine();
$lion->accept($jump); // Jumped 7 feet! Back on the ground!
breakLine();
$dolphin->accept($speak); // Tuut tutt tuutt!
breakLine();
$dolphin->accept($jump); // Walked on water a little and disappeared
breakLine();
