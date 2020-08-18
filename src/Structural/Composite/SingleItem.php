<?php


namespace App\Structural\Composite;


class SingleItem extends MenuItem
{
    public function render(): string
    {
        return '<a>' . $this->getName() . '</a>';
    }
}