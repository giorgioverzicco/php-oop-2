<?php

require_once __DIR__ . '/classes.php';

class Person
{
    private string $first_name;
    private string $last_name;
    private CreditCard $credit_card;

    public function __construct(string $first_name, string $last_name)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    public function firstName(): string
    {
        return $this->first_name;
    }

    public function lastName(): string
    {
        return $this->last_name;
    }

    public function setCreditCard(CreditCard $credit_card): void
    {
        $this->credit_card = $credit_card;
    }

    public function creditCard(): CreditCard
    {
        return $this->credit_card;
    }
}