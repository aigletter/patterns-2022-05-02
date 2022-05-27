<?php

include dirname(__DIR__, 2) . '/vendor/autoload.php';

/*$str = '1';
$int = (int) $str;*/

/*$array = [
    'name' => 'Ivan',
    'age' => 35,
    'gender' => 'male',
];
$json = json_encode($array);
//$object = (object) $array;
$object = json_decode($json);
//$object = new stdClass();*/

$user = new \patterns\Prototype\User(22, 'John');
$user->register();


// ........


$user2 = clone $user;
$user2->block();


//$result = $object === $object2;

exit();