<?php
// core_error_parent.php
class Test {
	public $name;
	public function __construct($name)
	{
		parent::__construct();
		$this->name = $name;
	}
}
try {
	$test = new Test('Andrew');
	echo $test->name;
} catch (Throwable $t) {
	echo $t;
}
echo "\n";
