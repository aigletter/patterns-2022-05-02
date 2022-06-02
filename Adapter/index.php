<?php

use PHPMailer\PHPMailer\PHPMailer;

include dirname(__DIR__, 2) . '/vendor/autoload.php';

//$mailer = new \patterns\Adapter\Mailer();
$mailer = new \patterns\Adapter\PHPMailerAdapter(new PHPMailer(true));
$orderManager = new \patterns\Adapter\OrderManager($mailer);

$orderManager->create([
    'to' => 'ivan.petrov@gmail.com'
]);