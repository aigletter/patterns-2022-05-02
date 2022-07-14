<?php

namespace patterns\ChainOfResponsibility;

class HandlerView extends HandlerAbstract
{
    public function handle(Request $request)
    {
        if ($request->getAction() === 'view') {
            return 'OK view';
        }

        return parent::handle($request);
    }
}