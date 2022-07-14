<?php

namespace patterns\ChainOfResponsibility;

class HandlerUpdate extends HandlerAbstract
{
    public function handle(Request $request)
    {
        if ($request->getAction() === 'update') {
            return 'OK update';
        }

        return parent::handle($request);
    }
}