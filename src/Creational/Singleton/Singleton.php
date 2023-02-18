<?php

namespace Learning\DesignPatterns\Creational\Singleton;


class Singleton
{

    protected static $instance;

    private function __construct()
    {
    }

    public static function getInstance(): Singleton
    {
        if (!static::$instance) {
            static::$instance = new self();
        }

        return static::$instance;
    }
}
