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
echo $test->name . '[' . $test->id . ']';
echo "\n";
$reflect = new ReflectionObject($test);
ReflectionClass::export($reflect);
