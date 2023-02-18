<?php

namespace Learning\DesignPatterns\Creational\FactoryMethod;


class DevelopmentManager extends HiringManager
{

    protected function makeInterviewer(): Interviewer
    {
        return new Developer();
    }
}
