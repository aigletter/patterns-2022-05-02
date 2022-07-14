<?php

namespace patterns\ChainOfResponsibility;

class HandlerCreate extends HandlerAbstract
{
    public function handle(Request $request)
    {
        if ($request->getAction() === 'create') {
            return 'OK create';
        }

        return parent::handle($request);
    }
}