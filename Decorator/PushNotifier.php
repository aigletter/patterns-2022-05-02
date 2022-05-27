<?php

namespace patterns\Decorator;

class PushNotifier extends NotifierDecoratorAbstract
{
    public function doSelf($to, $content)
    {
        echo 'Push notification was sent. Good work' . PHP_EOL;
    }
}