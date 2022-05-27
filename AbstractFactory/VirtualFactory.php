<?php

namespace patterns\AbstractFactory;

class VirtualFactory implements AbstractFactoryInterface
{
    public function createOrder(): OrderInterface
    {
        return new VirtualOrder();
    }

    public function createProduct(): ProductInterface
    {
        return new VirtualProduct();
    }
}