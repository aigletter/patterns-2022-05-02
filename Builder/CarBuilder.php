<?php

namespace patterns\Builder;

class CarBuilder implements BuilderInterface
{
    protected $power;

    protected $salon;

    protected $color;

    protected $cruis;

    protected $transmission;

    protected $climat;

    protected $parktronic;

    protected $luk;

    /**
     * @param mixed $power
     * @return CarBuilder
     */
    public function setPower(int $power)
    {
        $this->power = $power;
        return $this;
    }

    /**
     * @param mixed $salon
     * @return CarBuilder
     */
    public function setSalon($salon)
    {
        $this->salon = $salon;
        return $this;
    }

    /**
     * @param mixed $color
     * @return CarBuilder
     */
    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    /**
     * @param mixed $cruis
     * @return CarBuilder
     */
    public function setCruis($cruis)
    {
        $this->cruis = $cruis;
        return $this;
    }

    /**
     * @param mixed $transmission
     * @return CarBuilder
     */
    public function setTransmission($transmission)
    {
        $this->transmission = $transmission;
        return $this;
    }

    /**
     * @param mixed $climat
     * @return CarBuilder
     */
    public function setClimat($climat)
    {
        $this->climat = $climat;
        return $this;
    }

    /**
     * @param mixed $parktronic
     * @return CarBuilder
     */
    public function setParktronic($parktronic)
    {
        $this->parktronic = $parktronic;
        return $this;
    }

    /**
     * @param mixed $luk
     * @return CarBuilder
     */
    public function setLuk($luk)
    {
        $this->luk = $luk;
        return $this;
    }


    public function build(): Car
    {
        if (!$this->power) {
            throw new \Exception();
        }
        return new Car(
            $this->power,
            $this->salon,
            $this->color,
            $this->transmission,
            $this->cruis,
            $this->climat,
            $this->parktronic,
            $this->luk
        );
    }
}