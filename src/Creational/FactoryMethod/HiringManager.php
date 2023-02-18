<?php

namespace Learning\DesignPatterns\Creational\FactoryMethod;

abstract class HiringManager
{
    abstract protected function makeInterviewer(): Interviewer;

    public function takeInterview(): string
    {
        return $this->makeInterviewer()->askQuestions();
    }
}
