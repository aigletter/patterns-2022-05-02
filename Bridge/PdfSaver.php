<?php

namespace patterns\Bridge;

class PdfSaver implements SaverInterface
{
    public function save($data)
    {
        $filename = 'data/report-' . date('Y-m-d H:i:s') . '.pdf';
        file_put_contents($filename, serialize($data));
    }
}