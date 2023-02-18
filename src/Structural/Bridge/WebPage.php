<?php

namespace Learning\DesignPatterns\Structural\Bridge;

interface WebPage
{

    public function __construct(Theme $theme);
    public function getContent(): string;
}
