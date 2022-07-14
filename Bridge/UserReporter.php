<?php

namespace patterns\Bridge;

class UserReporter implements ReporterInterface
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