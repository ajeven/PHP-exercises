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

	public function perimeter()
	{
		if ($this->height === $this->width)
		{
			$perimeter = $this->height * 4;
			return $perimeter;
		} else
		{
			echo " Is not a square " . "\n";
		}
	}

}