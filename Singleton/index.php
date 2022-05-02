<?php

include __DIR__ . '/../../vendor/autoload.php';

// User 1
//$db1 = new \patterns\singleton\Db();
$db1 = \patterns\Singleton\Db::getInstance();
$db1->query('SELECT * FROM users');


// User 2
//$db2 = new \patterns\singleton\Db();
$db2 = \patterns\Singleton\Db::getInstance();
$db2->query('SELECT * FROM users');


// User 3
//$db3 = new \patterns\singleton\Db();
$db3 = \patterns\Singleton\Db::getInstance();
$db3->query('SELECT * FROM users');

$result = $db1 === $db2 && $db2 === $db3;

exit();