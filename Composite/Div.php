<?php

namespace patterns\Composite;

class Div implements TagInterface
{
    /** @var TagInterface[] */
    protected $children;

    public function render(): string
    {
        $output = '<div>' . PHP_EOL;

        foreach ($this->children as $child) {
            $output .= $child->render();
        }

        $output .= '</div>' . PHP_EOL;

        return $output;
    }

    public function add(TagInterface $tag): void
    {
        $this->children[] = $tag;
    }
}