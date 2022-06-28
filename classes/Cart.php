<?php

class Cart
{
    protected array $products = [];
    protected float $total = 0;

    public function products()
    {
        return $this->products;
    }

    public function add(Product $product)
    {
        $this->products[] = $product;
        $this->total += $product->price();
    }

    public function buy(CreditCard $credit_card, float $discount)
    {
        foreach ($this->products as $idx => $product) {
            try {
                $credit_card->withdraw($product->price() * $discount);
                $this->products = array_splice($this->products, $idx, 1);
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
    }
}