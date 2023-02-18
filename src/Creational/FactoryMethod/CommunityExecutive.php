<?php

namespace Learning\DesignPatterns\Creational\FactoryMethod;

class CommunityExecutive implements Interviewer
{

    public function askQuestions(): string
    {
        return 'Ask Questions about community building.';
    }
}
