<?php


namespace Quadrilateral;

use Colorable\Colorable;
use JetBrains\PhpStorm\Pure;

include "../vendor/autoload.php";

class Squares extends Rectangles implements Colorable
{
    #[Pure] public function __construct(string $name, int $width)
    {
        parent::__construct($name, $width, $width);
    }

    public function howToColor()
    {
        echo "Color all four sides..";
    }

    public function show(): string
    {
        return parent::show(); // TODO: Change the autogenerated stub
    }


}