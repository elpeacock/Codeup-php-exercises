<?php

class rectangle 
{
	private $height;
	private $width;
	//switching from public to private caused these params to be unavaliable to square even tho square extends rectangle
	//switching to protected allows params to be availiable in the extended class


	public function __construct($height, $width) 
	{
		$this->setHeight($height);
		$this->setWidth($width);
	}

	protected function setHeight($height)
	{
		$this->height = $height;
	}

	protected function setWidth($width)
	{
		$this->width = $width;
	}

	public function getHeight()
	{
		return $this->height;
	}

	public function getWidth()
	{
		return $this->width;
	}

	public function area() 
	{
		$area = $this->height * $this->width;
		return "The area (called from rectangle class) of this rectangle is: {$area}";
	}

	public function perimeter () 
	{
		$perimeter = (2 * $this->height) + (2 * $this->width);
		return "The perimeter (called from rectangle class) of the rectangle is: {$perimeter}";
	}
}