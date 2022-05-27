<?php

namespace patterns\Decorator;

class Mailer extends NotifierDecoratorAbstract
{
    public function doSelf($address, $text)
    {
        echo 'Mail was sent successfully to ' . $address . ' with text "' . $text . '"' . PHP_EOL;
    }
}