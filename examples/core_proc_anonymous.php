<?php
// core_proc_anonymous.php
class Test 
{
	public $name = 'Andrew';
	public function __invoke() 
	{
		return $this->name . "\n";
	}
	public function getAnon()
	{
		return Closure::fromCallable($this);
	}
}
$obj  = new class () extends Test {
	public $name = 'Doug';
};
$test = new Test();
$anon = $test->getAnon();
echo $anon();
$new = Closure::bind($anon, $obj);
echo $new();
