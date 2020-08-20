<?php
// core_cool_attr_misc.php
class Test
{
	public $id;
	public $name;
	public $request;
	public function __construct(
		int $id = 0, 
		string $name = '', 
		iterable $request = [])
	{
		$this->id = $id;
		$this->name = $name;
		$this->request = $request;
	}
}
$test = new Test(111, 'Doug', new ArrayIterator($_SERVER));
var_dump($test);
