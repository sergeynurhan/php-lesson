<?php

class Computer
{
    public $name;
    public $ram;
    public $memory;
    protected $processor;

    public function __construct(int $memory, string $processor)
    {
        $this->memory = $memory;
        $this->processor = $processor;
    }

    public function on()
    {
        return $this->memory;
    }
}