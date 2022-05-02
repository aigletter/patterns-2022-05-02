<?php

namespace patterns\FactoryMethod;

class ProductTwo implements ProductInterface
{
    protected $object;

    public function __construct(\stdClass $object)
    {
        $this->object = $object;
    }

    public function doSomething(): string
    {
        return 'I am product two' . PHP_EOL;
    }
}