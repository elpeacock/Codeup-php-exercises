<?php


class square extends rectangle
{

	function perimeter () 
	{
		$perimeter = (2 * $this->height) + (2 * $this->width);
		return "The perimeter of the square is: {$perimeter}";
	}
}