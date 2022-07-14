<?php

namespace patterns\Bridge;

class TxtSaver implements SaverInterface
{
    public function save($data)
    {
        $filename = 'data/report-' . date('Y-m-d H:i:s') . '.txt';
        file_put_contents($filename, json_encode($data));
    }
}