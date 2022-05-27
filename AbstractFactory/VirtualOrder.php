<?php

namespace patterns\AbstractFactory;

class VirtualOrder implements OrderInterface
{
    protected $products;

    public function addProduct(ProductInterface $product)
    {
        $this->products[] = $product;
    }
}