<?php

require_once __DIR__ . '/classes.php';

class Toy extends Product
{
    protected string $color;

    public function __construct(string $name, float $price, string $color)
    {
        parent::__construct($name, $price);

        $this->color = $color;
    }
}