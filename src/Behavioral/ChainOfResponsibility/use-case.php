<?php

use Learning\DesignPatterns\Behavioral\ChainOfResponsibility\{
    Bank,
    Paypal,
    Bitcoin
};

$bank = new Bank(100); // Bank with balance 100
$paypal = new Paypal(200); // Paypal with balance 200
$bitcoin = new Bitcoin(300); // Bitcoin with balance 300
$bank->setNext($paypal);
$paypal->setNext($bitcoin);
// Let's try to pay using the first priority i.e. bank
$bank->pay(259);
