<?php

require_once __DIR__ . '/classes.php';

class Food extends Product
{
    protected string $animal_type;

    public function __construct(string $name, float $price, string $animal_type)
    {
        parent::__construct($name, $price);

        $this->animal_type = $animal_type;
    }
}