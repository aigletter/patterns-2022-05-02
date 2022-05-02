<?php

namespace patterns\FactoryMethod;

abstract class FactoryGeneral
{
    public function createProduct(): ProductInterface
    {
        return $this->createConcreteProduct();
    }

    abstract protected function createConcreteProduct(): ProductInterface;
}