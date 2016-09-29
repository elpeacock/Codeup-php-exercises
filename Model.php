<?php

class Model
{
	private $attributes = [];
	protected static $table = 'model';

	//magically put stuffs in attributes (protected)
	public function __set($name, $value)
	{
		$this->attributes[$name] = $value;
		
	}

	//magically get stuffs from attributes (protected)
	public function __get($name)
	{
		if (isset($this->attributes[$name])) {
			return $this->attributes[$name];
		} 
		return null;
		
	}

	//add static method to return table
	public static function getTableName()
	{
		//called from users, keyword self:: returns model
		// return self::$table;
		//called from users, keyword static:: returns users
		return static::$table;
	}
}

// $thing = new Model();

// $thing->color = 'yellow';
// $thing->type = 'backpack';
// $thing->color;
// $thing->type;
// $thing->purse;
