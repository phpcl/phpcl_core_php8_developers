<?php
// core_ext_reflection_export.php
class Test
{
	public $id = 0;
	public $name = '';
	public function getId() { return $this->id; }
	public function getName() { return $this->name; }
}
$test = new Test();
$test->id = 999;
$test->name = 'Andrew';

// this works in both PHP 7 and 8
$reflect = new ReflectionObject($test);
echo $reflect . "\n";

// this doesn't work in PHP 8
ReflectionClass::export($reflect);

