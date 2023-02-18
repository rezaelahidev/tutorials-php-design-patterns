<?php

namespace Learning\DesignPatterns\Structural\Adapter;

class Hunter
{

    public function hunt(LionInterface $lion): string
    {
        return "{$lion->roar()} <===3 Hunter";
    }
}
