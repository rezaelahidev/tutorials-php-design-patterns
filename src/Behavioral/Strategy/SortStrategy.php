<?php

namespace Learning\DesignPatterns\Behavioral\Strategy;

interface SortStrategy
{
    public function sort(array $dataset): array;
}
