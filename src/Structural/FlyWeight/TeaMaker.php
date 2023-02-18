<?php

namespace Learning\DesignPatterns\Structural\FlyWeight;

class TeaMaker
{
    protected $availableTea = [];

    public function make($preference)
    {
        if (empty($this->availableTea[$preference])) {
            $this->availableTea[$preference] = new KarakTea();
        }
        return $this->availableTea[$preference];
    }
}
