<?php

namespace patterns\Prototype;

class User
{
    protected $age;

    private $name;

    protected $status;

    public function __construct($age, $name, Status $status = null)
    {
        $this->age = $age;
        $this->name = $name;
        $this->status = $status ?? new Status(Status::STATUS_GUEST);
    }

    public function __clone(): void
    {
        $this->status = clone $this->status;
    }

    public function register()
    {
        $this->status->setStatus(Status::STATUS_REGISTERED);
    }

    public function block()
    {
        $this->status->setStatus(Status::STATUS_BLOCKED);
    }
}