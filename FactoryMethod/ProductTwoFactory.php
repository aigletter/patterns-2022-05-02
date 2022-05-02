<?php

namespace patterns\FactoryMethod;

class ProductTwoFactory extends FactoryGeneral
{
    protected function createConcreteProduct(): ProductInterface
    {
        return new ProductTwo(new \stdClass());
    }
}