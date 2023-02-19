<?php

namespace Learning\DesignPatterns\Behavioral\Iterator;

use Iterator;
use Countable;

class StationList implements Countable, Iterator
{
    protected array $stations = [];
    protected $counter = 0;

    public function addStation(RadioStation $radioStation)
    {
        $this->stations[] = $radioStation;
    }

    public function removeStation(RadioStation $toRemove)
    {
        $toRemoveFrequency = $toRemove->getFrequency();
        $this->stations = array_filter($this->stations, function (RadioStation $station) use ($toRemoveFrequency) {
            return $station->getFrequency() !== $toRemoveFrequency;
        });
    }

    public function count(): int
    {
        return count($this->stations);
    }

    public function current(): RadioStation
    {
        return $this->stations[$this->counter];
    }

    public function key(): mixed
    {
        return $this->counter;
    }

    public function next(): void
    {
        $this->counter++;
    }

    public function rewind(): void
    {
        $this->counter = 0;
    }

    public function valid(): bool
    {
        return isset($this->stations[$this->counter]);
    }
}
