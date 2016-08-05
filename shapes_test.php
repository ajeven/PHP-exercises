<?php
require_once 'rectangle.php';
require_once 'square.php';


$shape = new Rectangle(2, 5);
echo "The area of rectanlge1 = " . $shape->area() . "\n";

$square = new Square(2, 2, 2);
echo "The perimeter of square1 = " . $square->perimeter() . "\n";