<?php

namespace Learning\DesignPatterns\Behavioral\Memento;


class EditorMemento
{
    protected $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }

    public function getContent()
    {
        return $this->content;
    }
}
