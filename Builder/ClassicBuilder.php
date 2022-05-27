<?php

namespace patterns\Builder;

class ClassicBuilder
{
    protected $flors;

    protected $facade;

    protected $type;

    /**
     * @return mixed
     */
    public function getFlors()
    {
        return $this->flors;
    }

    /**
     * @param mixed $flors
     * @return ClassicBuilder
     */
    public function setFlors($flors)
    {
        $this->flors = $flors;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFacade()
    {
        return $this->facade;
    }

    /**
     * @param mixed $facade
     * @return ClassicBuilder
     */
    public function setFacade($facade)
    {
        $this->facade = $facade;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     * @return ClassicBuilder
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    public function build()
    {
        return new House($this);
    }
}