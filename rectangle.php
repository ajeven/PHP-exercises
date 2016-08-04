<?php

class Rectangle
{
	public $height;
	public $width;

	public function __construct($height, $width)
	{
		$this->height = $height;
		$this->width = $width;
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
			$perimeter = $this->height + $this->height + $this->height + $this->height;
			return $perimeter;
		} else
		{
			echo " Is not a square " . "\n";
		}
	}

}
	