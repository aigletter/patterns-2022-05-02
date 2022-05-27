<?php

namespace patterns\Prototype;

class Status
{
    public const STATUS_GUEST = 'guest';

    public const STATUS_REGISTERED = 'registered';

    public const STATUS_BLOCKED = 'blocked';

    protected $status;

    public function __construct(string $status = self::STATUS_GUEST)
    {
        $this->status = $status;
    }

    public function setStatus(string $status)
    {
        $this->status = $status;
    }
}