<?php

namespace Learning\DesignPatterns\Structural\Decorator;

interface Coffee
{

    public function getCost(): int;
    public function getDescription(): string;
}
