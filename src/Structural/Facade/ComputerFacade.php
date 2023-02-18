<?php

namespace Learning\DesignPatterns\Structural\Facade;

class ComputerFacade
{
    protected $computer;
    public function __construct(Computer $computer)
    {
        $this->computer = $computer;
    }
    public function turnOn()
    {
        $this->computer->getElectricShock();
        breakLine();
        $this->computer->makeSound();
        breakLine();
        $this->computer->showLoadingScreen();
        breakLine();
        $this->computer->bam();
        breakLine();
    }

    public function turnOff()
    {
        $this->computer->closeEverything();
        breakLine();
        $this->computer->pullCurrent();
        breakLine();
        $this->computer->sooth();
        breakLine();
    }
}
