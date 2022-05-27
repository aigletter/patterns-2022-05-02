<?php

include dirname(__DIR__, 2) . '/vendor/autoload.php';


$notifier = new \patterns\Decorator\SmsSender();
$notifier = new \patterns\Decorator\PushNotifier($notifier);
$notifier = new \patterns\Decorator\Mailer($notifier);
$manager = new \patterns\Decorator\OrderManager($notifier);

$manager->createOrder([
    'email' => 'john@gmail.com',
    'sum' => 2000
]);

exit();