<?php

namespace patterns\Builder;

class Car
{
    protected $power;

    protected $salon;

    protected $color;

    protected $cruis;

    protected $transmission;

    protected $climat;

    protected $parktronic;

    protected $luk;

    public function __construct(
        $power,
        $salon,
        $color,
        $transmission,
        $cruis = null,
        $climat = null,
        $parktronic = null,
        $luk = null
    ) {
        $this->power = $power;
        $this->salon = $salon;
        $this->color = $color;
        $this->cruis = $cruis;
        $this->transmission = $transmission;
        $this->climat = $climat;
        $this->parktronic = $parktronic;
        $this->luk = $luk;
    }
}