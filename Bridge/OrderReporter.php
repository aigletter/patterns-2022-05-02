<?php

namespace patterns\Bridge;

class OrderReporter implements ReporterInterface
{
    protected $saver;

    public function __construct(SaverInterface $saver)
    {
        $this->saver = $saver;
    }


    public function report($data)
    {
        // TODO
        $this->saver->save($data);
    }
}