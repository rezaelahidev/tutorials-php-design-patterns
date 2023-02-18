<?php

namespace Learning\DesignPatterns\Structural\Adapter;

class AfricanLion implements LionInterface
{
    public function roar(): string
    {
        return 'AfricanLion Roar :XXX';
    }
}
