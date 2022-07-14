<?php

namespace patterns\Bridge;

class JsonSaver implements SaverInterface
{
    public function save($data)
    {
        $filename = 'data/report-' . date('Y-m-d H:i:s') . '.json';
        file_put_contents($filename, json_encode($data));
    }
}