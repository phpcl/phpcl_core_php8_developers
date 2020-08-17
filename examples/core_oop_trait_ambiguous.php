<?php
// core_oop_trait_ambiguous.php
trait Test1 {
	public function test() { return 'TEST1'; }
}
trait Test2 {
	public function test() { return 'TEST2'; }
}
class PhpCL {
	use Test1, Test2 { test as otherTest; }
	public function test() { return 'PHP-CL'; }
}
$phpcl = new PhpCL();
echo $phpcl->test();
echo "\n";
echo $phpcl->otherTest();
echo "\n";
