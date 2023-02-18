<?php

namespace Learning\DesignPatterns\Structural\Bridge;


class AquaTheme implements Theme
{
    public function getColor(): string
    {
        return 'Blue Light';
    }
}
