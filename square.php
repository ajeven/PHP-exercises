<?php
require_once 'rectangle.php';

class Square extends Rectangle
{

	public function __construct($height, $width, $side)
	{
		parent::__construct($height, $width);
		$this->height = $side;
	}

		public function area()
	{
		$area = $this->height * $this->width;
		return $area;
	}

	public function getHeight()
	{
		return $this->height;

	}
	public function getWidth()
	{
		return $this->width;

	}
	public function getSide()
	{
		return $this->side;

	}

	// public function perimeter()
	// {
	// 	if ($this->height === $this->width)
	// 	{
	// 		$perimeter = $this->height * 4;
	// 		return $perimeter;
	// 	} else
	// 	{
	// 		echo " Is not a square " . "\n";
	// 	}
	// }

}