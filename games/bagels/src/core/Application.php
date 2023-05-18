<?php

namespace app\core;

class Application
{
    public function __construct(
        public string $value = "Hello world!"
        )
    {        
    }

    public function getValue(): void
    {
        echo $this->value . PHP_EOL;
    }
}