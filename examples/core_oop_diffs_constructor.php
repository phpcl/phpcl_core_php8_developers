<?php
class Test {
	public $name = '';
	public function test($name) {
		$this->name = $name;
	}
}
$test = new Test('Andrew');
echo $test->name;

