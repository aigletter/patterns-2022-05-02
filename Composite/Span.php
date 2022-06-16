<?php

namespace patterns\Composite;

class Span implements TagInterface
{
    protected $text;

    /** @var TagInterface[] */
    protected $children;

    public function __construct($text = null)
    {
        $this->text = $text;
    }

    public function render(): string
    {
        return '<span>' . $this->text . $this->renderChildren() . '</span>' . PHP_EOL;
    }

    public function renderChildren()
    {
        $output = '';
        foreach ((array) $this->children as $child) {
            $output .= $child->render();
        }
        return $output;
    }

    public function add(TagInterface $tag): void
    {
        $this->children[] = $tag;
    }
}