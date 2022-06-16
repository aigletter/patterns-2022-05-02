<?php

include dirname(__DIR__, 2) . '/vendor/autoload.php';

function render(\patterns\Composite\TagInterface $tag)
{
    echo '<div class="container">' . PHP_EOL;
    echo $tag->render();
    echo '</div>' . PHP_EOL;
}

$span = new \patterns\Composite\Span('Hello world');
$span2 = new \patterns\Composite\Span();
$span2->add($span);
$div = new \patterns\Composite\Div();
$div->add($span2);
$div2 = new \patterns\Composite\Div();
$div2->add($div);

render($div2);