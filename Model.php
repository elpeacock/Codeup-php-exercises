<?php

class Model
{
	protected $attributes = [];

	//magically put stuffs in attributes (protected)
	public function __set($name, $value)
	{
		$this->attributes[$name] = $value;
		var_dump($this->attributes);
	}

	//magically get stuffs from attributes (protected)
	public function __get($name)
	{
		if (isset($this->attributes[$name])) {
			echo $this->attributes[$name] . PHP_EOL;
		} 
		return null;
		
	}
}

$thing = new Model();

$thing->color = 'yellow';
$thing->type = 'backpack';
$thing->color;
$thing->type;
$thing->purse;
