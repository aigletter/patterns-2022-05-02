<?php

namespace patterns\AbstractFactory;

class RealFactory implements AbstractFactoryInterface
{
    public function createOrder(): OrderInterface
    {
        return new RealOrder();
    }

    public function createProduct(): ProductInterface
    {
        return new RealProduct();
    }
}