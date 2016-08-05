<?php

class Model
{
	// Array to store our key/value data
	private $data = [];
	protected static $table;

	// Magic setter to populate $data array
	public function __set($name, $value)
	{
		// Set the $name key to hold $value in $data
		$this->data[$name] = $value;
	}

	// Magic getter to retrieve values from $data
	public function __get($name)
	{
		// Check for existence of array key $name
		if (array_key_exists($name, $this->data)) {
			return $this->data[$name];
		}

		return null;
	}
	public static function getTable()
	{
		return static::$table;
	}
}

$test = new Model();
$test->name = ['Charles Wentworth III', 'Claire Cunningham', 'Chief Reginold Labrador', 'Capitain Roxy Rotwieller'];
print_r($test->name);
echo $test->name[1] . "\n";