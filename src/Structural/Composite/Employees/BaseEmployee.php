<?php

namespace Learning\DesignPatterns\Structural\Composite\Employees;

use Learning\DesignPatterns\Structural\Composite\Employee;

abstract class BaseEmployee implements Employee
{
    protected string $name;
    protected float $salary;

    public function __construct(string $name, float $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function setSalary(float $salary): void
    {
        $this->salary = $salary;
    }
    public function getSalary(): float
    {
        return $this->salary;
    }
    public function getRoles(): array
    {
        return [];
    }
}
