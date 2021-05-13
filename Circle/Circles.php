<?php

namespace Circle;

use Shape\Shape;
use JetBrains\PhpStorm\Pure;

include "../vendor/autoload.php";

class Circles extends Shape
{
    public int|float $radius;

    #[Pure] public function __construct(string $name, int|float $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    #[Pure] public function calculateArea(): int|float
    {
        return pi() * pow($this->radius, 2);
    }

    #[Pure] public function calculatePerimeter(): int|float
    {
        return pi() * $this->radius * 2;
    }
}
