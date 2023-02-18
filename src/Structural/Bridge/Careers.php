<?php

namespace Learning\DesignPatterns\Structural\Bridge;


class Careers implements WebPage
{
    protected $theme;

    public function __construct(Theme $theme)
    {
        $this->theme = $theme;
    }

    public function getContent(): string
    {
        return "Careers page in {$this->theme->getColor()}";
    }
}
