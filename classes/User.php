<?php

require_once __DIR__ . '/classes.php';

class User extends Person
{
    protected string $email;
    protected float $discount;
    protected Cart $cart;

    public function __construct(string $first_name, string $last_name, string $email)
    {
        parent::__construct($first_name, $last_name);

        $this->email = $email;
        $this->discount = 1.0;
        $this->cart = new Cart();
    }

//    public function buy(Product $product): void
//    {
//        $this->creditCard()->withdraw($product->price() * $this->discount);
//    }

    public function cart()
    {
        return $this->cart;
    }

    public function buy(): void
    {
        $this->cart->buy($this->creditCard(), $this->discount);
    }

    public function register(): RegisteredUser
    {
        $user = new RegisteredUser($this->firstName(), $this->lastName(), $this->email);
        $user->setCreditCard($this->creditCard());
        return $user;
    }
}