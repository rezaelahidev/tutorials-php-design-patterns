<?php

use Learning\DesignPatterns\Behavioral\Strategy\{
    Sorter,
    QuickSortStrategy,
    BubbleSortStrategy
};

$dataset = [1, 5, 4, 3, 2, 8];
$sorter = new Sorter(new BubbleSortStrategy());
$sorter->sort($dataset); // Output: Sorting using bubble sort
breakLine();
$sorter = new Sorter(new QuickSortStrategy());
$sorter->sort($dataset); // Output: Sorting using quick sor