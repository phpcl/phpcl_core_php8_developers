<?php
// core_oop_trait_mismatch.php
trait Test1 {
	public abstract function test(int $num) : int;
}
class PhpCL {
	use Test1;
	public function test(string $test) : string
	{
		return $test; 
	}
}
$phpcl = new PhpCL();
echo $phpcl->test('TEST');
echo "\n";
