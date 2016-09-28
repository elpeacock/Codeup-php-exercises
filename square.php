<?php


class square extends rectangle
{

	public function __construct ($height)
	{
		parent::__construct($height, $height);
	}


	public function perimeter () 
	{
		$perimeter = (2 * $this->getHeight()) + (2 * $this->getWidth());
		return "The perimeter (from square class) of the square is: {$perimeter}";
	}

	public function area() {
		$area = $this->getHeight() * $this->getWidth();
		return "The area (from square class) of this square is: {$area}";
	}
}