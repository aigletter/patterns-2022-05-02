<?php

namespace patterns\Decorator;

class SmsSender extends NotifierDecoratorAbstract
{
    public function doSelf($to, $content)
    {
        echo 'Sms was sent successfully ' . PHP_EOL;
    }
}