<?php

namespace patterns\ChainOfResponsibility;

abstract class HandlerAbstract implements HandlerInterface
{
    protected $next;

    public function __construct(HandlerInterface $next = null)
    {
        $this->next = $next;
    }

    public function handle(Request $request)
    {
        if ($this->next) {
            return $this->next->handle($request);
        }

        throw new \Exception();
    }
}