<?php
// core_oop_diffs_magic_sleep.php
class Test {
	public $name = 'Doug';
	public function __sleep() {
		return ['name', 'missing'];
	}
}
$test = new Test();
$stored = serialize($test);
echo $stored . "\n";
$restored = unserialize($stored);
var_dump($restored);

