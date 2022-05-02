<?php

namespace patterns\FactoryMethod;

class ProductOneFactory extends FactoryGeneral
{
    protected function createConcreteProduct(): ProductInterface
    {
        return new ProductOne('hello', 1234);
    }
}