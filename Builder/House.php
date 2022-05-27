<?php

namespace patterns\Builder;

class House
{
    protected $flors;

    protected $facade;

    protected $type;

    public function __construct(ClassicBuilder $builder)
    {
        $this->flors = $builder->getFlors();
        $this->facade = $builder->getFacade();
        $this->type = $builder->getType();
    }
}