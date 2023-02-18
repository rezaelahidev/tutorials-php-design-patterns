<?php

namespace Learning\DesignPatterns\Structural\Bridge;


class LightTheme implements Theme
{
    public function getColor(): string
    {
        return 'Off White';
    }
}
