<?php

namespace Learning\DesignPatterns\Creational\FactoryMethod;

class CommunityManager extends HiringManager
{
    protected function makeInterviewer(): Interviewer
    {
        return new CommunityExecutive();
    }
}
