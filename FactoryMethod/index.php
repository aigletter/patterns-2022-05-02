<?php

include __DIR__ . '/../../vendor/autoload.php';

/**
 * @param \patterns\FactoryMethod\FactoryGeneral $factory
 * @param $count
 * @return \patterns\FactoryMethod\ProductInterface[]
 */
function getProducts(\patterns\FactoryMethod\FactoryGeneral $factory, $count)
{
    for ($i = 0; $i < $count; $i++) {
        $products[] = $factory->createProduct();
    }

    return $products;
}

$factory = new \patterns\FactoryMethod\ProductOneFactory();
//$factory = new \patterns\FactoryMethod\ProductTwoFactory();
$products = getProducts($factory, 8);

foreach ($products as $product) {
    echo $product->doSomething();
}

exit();