<?php

namespace Learning\DesignPatterns\Structural\Adapter;


class AsianLion implements LionInterface
{

    public function roar(): string
    {
        return 'AsianLion :XXXXX';
    }
}
