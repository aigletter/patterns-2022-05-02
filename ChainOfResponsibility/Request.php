<?php

namespace patterns\ChainOfResponsibility;

class Request
{
    protected $action;

    public function __construct(string $action)
    {
        $this->action = $action;
    }

    public function getAction()
    {
        return $this->action;
    }
}