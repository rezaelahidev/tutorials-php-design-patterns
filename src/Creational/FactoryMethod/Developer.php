<?php

namespace Learning\DesignPatterns\Creational\FactoryMethod;

class Developer implements Interviewer
{

    public function askQuestions(): string
    {
        return 'Ask Questions about design patterns in programming.';
    }
}
