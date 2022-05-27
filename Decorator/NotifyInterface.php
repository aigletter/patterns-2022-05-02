<?php

namespace patterns\Decorator;

interface NotifyInterface
{
    public function notify($to, $content);
}