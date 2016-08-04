<?php
require_once 'rectangle.php';
require_once 'square.php';


$shape = new Rectangle(2, 5);
echo "The area of rectanlge1 = " . $shape->area() . "\n";

$shape1 = new Rectangle(6, 5);
echo "The area of rectanlge2 = " . $shape1->area() . "\n";

$shape2 = new Rectangle(1, 4);
echo "The area of rectanlge3 = " . $shape2->perimeter() . "\n";

$shape3 = new Rectangle(10, 5);
echo "The area of rectanlge4 = " . $shape3->area() . "\n";

$shape4 = new Rectangle(3, 20);
echo "The area of rectanlge5 = " . $shape4->area() . "\n";

$shape5 = new Rectangle(9, 9);
echo "The area of rectanlge6 = " . $shape5->area() . "\n";

$square = new Square(2, 2, 2);
echo "The perimeter of square1 = " . $square->perimeter() . "\n";

$square1 = new Square(6, 6, 6);
echo "The perimeter of square2 = " . $square1->perimeter() . "\n";

$square2 = new Square(5, 5, 5);
echo "The perimeter of square3 = " . $square2->perimeter() . "\n";

$square3 = new Square(9, 9, 9);
echo "The perimeter of square4 = " . $square3->perimeter() . "\n";

$shape6 = new Square(5, 9, 5);
echo "The perimeter of rectangle7 = " . $shape6->perimeter() . "\n";