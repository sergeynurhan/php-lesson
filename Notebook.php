<?php

require './Computer.php';

class Notebook extends Computer
{
    public $touchscreen;

    public function __construct(int $memory, string $processor)
    {
        return parent::__construct($memory, $processor);
    }

    
}