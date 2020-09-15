<?php
// core_oop_dereferencing.php
$testObj = new class ('test') {
	// NOTE: uses Constructor Argument Promotion!
	public $test = 'TEST';
	public static $staticTest = 'TEST';
	public  const CONST_TEST = 'TEST';
	public function getTest() { return $this->test; }
	public static function getStatTest() { return self::CONST_TEST; }
	public function __invoke() { return $this->getTest(); }
};
// de-referencing a property or constant
echo $testObj->test . "\n";
echo $testObj::$staticTest . "\n";
echo $testObj::CONST_TEST;
// de-referencing a method
echo $testObj->getTest() . "\n";
echo $testObj::getStatTest() . "\n";
echo $testObj() . "\n";
// de-referencing an array:
$testArr = ['TEST1','TEST2','TEST3'];
$pos = 0;
echo $testArr[$pos++] . "\n";
// not allowed in PHP 8!
// echo $testArr{$pos} . "\n";
