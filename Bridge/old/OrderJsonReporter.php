<?php

namespace patterns\Bridge\old;

class OrderJsonReporter implements ReporterInterface
{
    public function report($data)
    {
        $filename = 'data/order-report-' . date('Y-m-d H:i:s') . '.json';
        file_put_contents($filename, json_encode($data));
    }
}