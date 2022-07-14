<?php

use patterns\ChainOfResponsibility\HandlerCreate;
use patterns\ChainOfResponsibility\HandlerInterface;
use patterns\ChainOfResponsibility\HandlerUpdate;
use patterns\ChainOfResponsibility\HandlerView;
use patterns\ChainOfResponsibility\Request;

include dirname(__DIR__, 2) . '/vendor/autoload.php';

function run(HandlerInterface $handler, Request $request)
{
    return $handler->handle($request);
}

$request = new Request('view');
$handler = new HandlerCreate(
    new HandlerView(
        new HandlerUpdate()
    )
);

echo run($handler, $request);
echo PHP_EOL;

exit();