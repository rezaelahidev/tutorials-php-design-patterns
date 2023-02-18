<?php

use Learning\DesignPatterns\Structural\Composite\Employees\Developer;
use Learning\DesignPatterns\Structural\Composite\Employees\Designer;
use Learning\DesignPatterns\Structural\Composite\Organization;

$developer = new Developer('Reza Elahi', 20000);

$designer = new Designer('John', 100000);

$organization = new Organization();

$organization->addEmployee($designer);
$organization->addEmployee($developer);


echo "Net Salaries: {$organization->getNetSalaries()}";
