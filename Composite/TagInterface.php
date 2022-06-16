<?php

namespace patterns\Composite;

interface TagInterface
{
    public function render(): string;

    public function add(TagInterface $tag): void;
}