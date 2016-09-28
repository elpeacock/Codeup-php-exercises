<?php

class rectangle 
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
		return "The area of this rectangle is: {$area}";
	}

	public function perimeter () 
	{
		$perimeter = (2 * $this->height) + (2 * $this->width);
		return "The perimeter of the rectangle is: {$perimeter}";
	}
}