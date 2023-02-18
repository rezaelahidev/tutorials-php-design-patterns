<?php

namespace Learning\DesignPatterns\Structural\Bridge;


class DarkTheme implements Theme
{
    public function getColor(): string
    {
        return 'Dark Black';
    }
}
