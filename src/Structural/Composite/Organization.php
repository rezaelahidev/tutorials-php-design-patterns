<?php

namespace Learning\DesignPatterns\Structural\Composite;

use Learning\DesignPatterns\Structural\Composite\Employees\BaseEmployee;

class Organization
{

    /**
     * @var Employee[]
     */
    protected array $employees = [];

    public function addEmployee(BaseEmployee|Employee $employee): void
    {
        $this->employees[] = $employee;
    }

    public function getNetSalaries(): float
    {
        $netSalaries = 0;

        foreach ($this->employees as $employee) {

            $netSalaries += $employee->getSalary();
        }

        return $netSalaries;
    }
}
