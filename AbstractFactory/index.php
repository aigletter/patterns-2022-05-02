<?php

use patterns\AbstractFactory\AbstractFactoryInterface;
use patterns\AbstractFactory\RealFactory;
use patterns\AbstractFactory\VirtualFactory;

include __DIR__ . '/../../vendor/autoload.php';

function doSomething(AbstractFactoryInterface $factory)
{
    $order = $factory->createOrder();
    $product = $factory->createProduct();
    $order->addProduct($product);

    return $order;
}

//$factory = new RealFactory();
$factory = new VirtualFactory();
$order = doSomething($factory);

print_r($order);

exit();