<?php

use patterns\Builder\CarBuilder;

include __DIR__ . '/../../vendor/autoload.php';

$test = 1;

//
/*$car = new \patterns\Builder\Car(
    100,
    'cupe',
    'red',
    'auto',
    null,
    null,
    null,
    $test === 1 ? true : false
);*/

$builder = new CarBuilder();
/*$builder->setPower(300);
$builder->setSalon('cupe');
$builder->setTransmission('auto');
$builder->setColor('red');
$builder->setParktronic(true);

if ($test === 1) {
    $builder->setLuk(true);
}

$car = $builder->build();*/

$car = $builder->setTransmission('auto')
    ->setPower(300)
    ->setColor('red')
    ->setLuk(true)
    ->setSalon('cupe')
    ->setClimat('Panasonic')
    ->build();

$houseBuilder = new \patterns\Builder\ClassicBuilder();
$house = $houseBuilder->setFlors(5)->setType('some')->setFacade('any')->build();

exit();
