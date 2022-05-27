<?php

namespace patterns\Decorator;

abstract class NotifierDecoratorAbstract implements NotifyInterface
{
    protected ?NotifyInterface $notifier;

    public function __construct(?NotifyInterface $notifier = null)
    {
        $this->notifier = $notifier;
    }

    public function notify($to, $content)
    {
        if (isset($this->notifier)) {
            $this->notifier->notify($to, $content);
        }

        $this->doSelf($to, $content);
    }

    abstract protected function doSelf($to, $content);
}