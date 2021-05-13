<?php
use Circle\Circles;
use Circle\Cylinder;
use Quadrilateral\Rectangles;
use Quadrilateral\Squares;
use Colorable\Colorable;

include "vendor/autoload.php";

$square = new Squares("Square",5);
$rectangle = new Rectangles("Rectangle",5,6);
$circle = new Circles("Circle",5);
$cylinder = new Cylinder("Cylinder",5,5);

$arrayShape = [];
array_push($arrayShape, $square);
array_push($arrayShape, $rectangle);
array_push($arrayShape, $circle);
array_push($arrayShape, $cylinder);

foreach ($arrayShape as $key => $value){
    if ($value instanceof Colorable){
        echo $value->show()."<br>";
        echo "this area is : ".$value->calculateArea()."<br>";
        echo $value->howToColor()."<br>";
    } else {
        echo $value->show()."<br>".
            "this area is :". $value->calculateArea()."<br>";
    }
}
