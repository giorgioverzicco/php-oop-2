<?php

require_once __DIR__ . '/classes/classes.php';

$products = [
  new Food('Croccantini', 2.50, 'Cani'),
  new Toy('Osso di gomma', 4.50, 'Rosso'),
  new Toy('Pallina', 0.65, 'Gialla'),
  new Sit('Lettiera', 24.99, 'Gatti')
];

$user = new User('Mario', 'Rossi', 'mariorossi@gmail.com');
$user->setCreditCard(
    new CreditCard(
        $user->firstName(),
        $user->lastName(),
        1000,
        new DateTime('2023-01-01')
    )
);

foreach ($products as $product) {
    $user->cart()->add($product);
}

$user->buy();
var_dump($user->creditCard()->balance());
var_dump($user->cart()->products());
