<?php

class CreditCard
{
    protected string $first_name;
    protected string $last_name;
    protected float $balance;
    protected string $serial;
    protected int $cvc;
    protected DateTime $expire_date;

    public function __construct(string $first_name, string $last_name, float $balance, DateTime $expire_date)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->balance = $balance;
        $this->serial = "4320" . rand(100000000000, 999999999999);
        $this->cvc = rand(100, 999);
        $this->expire_date = $expire_date;
    }

    public function withdraw(float $amount): void
    {
        if ($amount < 0) {
            throw new Exception('Amount must not be less than 0.');
        }

        if ($this->balance < $amount) {
            throw new Exception("You do not have $amount in your balance.");
        }

        if ($this->expire_date < new DateTime()) {
            throw new Exception("Your card is expired.");
        }

        $this->balance -= $amount;
    }

    public function balance(): float
    {
        return $this->balance;
    }
}