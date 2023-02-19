<?php

namespace Learning\DesignPatterns\Behavioral\TemplateMethod;

abstract class Builder
{
    // Template method
    final public function build()
    {
        $this->test();
        breakLine();
        $this->lint();
        breakLine();
        $this->assemble();
        breakLine();
        $this->deploy();
        breakLine();
    }
    abstract public function test();
    abstract public function lint();
    abstract public function assemble();
    abstract public function deploy();
}
