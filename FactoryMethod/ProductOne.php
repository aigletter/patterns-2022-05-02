<?php

namespace patterns\FactoryMethod;

class ProductOne implements ProductInterface
{
    protected $hello;

    protected $world;

    public function __construct(string $hello, int $world)
    {
        $this->hello = $hello;
        $this->world = $world;
    }

    public function doSomething(): string
    {
        return 'I am product one' . PHP_EOL;
    }
}