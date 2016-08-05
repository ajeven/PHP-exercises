<?php

class Rectangle
{
	private $height;
	private $width;

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
			$perimeter = $this->height * 4;
			return $perimeter;
		} else
		{
			echo " Is not a square " . "\n";
		}
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
}
	