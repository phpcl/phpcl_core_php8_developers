<?php
class Test {
	public $name = 'Doug';
	public function __sleep() {
		return ['name', 'missing'];
	}
}
$test = new Test();
$stored = serialize($test);
echo $stored;


