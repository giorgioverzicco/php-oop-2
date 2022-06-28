<?php

require_once __DIR__ . '/classes.php';

class RegisteredUser extends User
{
    public function __construct(string $first_name, string $last_name, string $email)
    {
        parent::__construct($first_name, $last_name, $email);

        $this->discount = 0.8;
    }
}