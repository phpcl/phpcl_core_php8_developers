<?php
// core_cool_construct_new.php
class Test
{
	public function __construct(
		public int $id = 0, 
		public string $name = '', 
		public iterable $request = [])
	{}
}
$test = new Test(111, 'Doug', new ArrayIterator($_SERVER));
var_dump($test);
