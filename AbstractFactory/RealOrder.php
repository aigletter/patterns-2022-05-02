<?php

namespace patterns\AbstractFactory;

class RealOrder implements OrderInterface
{
    protected $products;

    public function addProduct(ProductInterface $product)
    {
        $this->products[] = $product;
    }
}