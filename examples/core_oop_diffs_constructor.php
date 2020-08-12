<?php
class Test {
	public $name = 'Default';
	public function test($name) {
		$this->name = $name;
	}
}
$test = new Test('Andrew');
echo $test->name;

