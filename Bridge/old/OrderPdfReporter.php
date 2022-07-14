<?php

namespace patterns\Bridge\old;

class OrderPdfReporter implements ReporterInterface
{
    public function report($order)
    {
        $filename = 'data/order-report-' . date('Y-m-d H:i:s') . '.pdf';
        file_put_contents($filename, serialize($order));
    }
}