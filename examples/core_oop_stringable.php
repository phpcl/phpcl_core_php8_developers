<?php
// core_oop_stringable.php
class Test
{
	public function __toString() { return __CLASS__; }
}
$test = new Test();
echo $test;
echo "\n";
$reflect = new ReflectionObject($test);
echo $reflect;

