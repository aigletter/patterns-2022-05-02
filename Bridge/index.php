<?php

include dirname(__DIR__, 2) . '/vendor/autoload.php';

function manage(\patterns\Bridge\ReporterInterface $reporter)
{
    $order = ['id' => 123, 'title' => 'helloworld'];
    $reporter->report($order);
}

$saver = new \patterns\Bridge\PdfSaver();
//$saver = new \patterns\Bridge\JsonSaver();
$reporter = new \patterns\Bridge\OrderReporter($saver);
manage($reporter);

sleep(1);

$reporter = new \patterns\Bridge\UserReporter($saver);
manage($reporter);

/*$reporter = new \patterns\Bridge\old\OrderPdfReporter();
manage($reporter);

$reporter = new \patterns\Bridge\old\OrderJsonReporter();
manage($reporter);*/