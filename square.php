<?php


class square extends rectangle
{

	public function __construct ($height)
	{
		parent::__construct($height, $height);
	}


	public function perimeter () 
	{
		$perimeter = (2 * $this->height) + (2 * $this->width);
		return "The perimeter of the square is: {$perimeter}";
	}

	public function area() {
		$area = $this->height * $this->width;
		return "The area of this square is: {$area}";
	}
}