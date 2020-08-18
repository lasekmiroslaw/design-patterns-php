<?php


namespace App\Structural\Composite;


abstract class MenuItem
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    abstract public  function render(): string;

    protected function getName(): string
    {
        return $this->name;
    }
}