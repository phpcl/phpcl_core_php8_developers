<?php
// core_error_clean_shutdown.php
class Test
{
	public function __destruct()
	{
		echo __METHOD__ . " was called\n";
	}
	public function problem($a)
	{
		return $a;
	}
}
$test = new Test();
echo $test->problem();
	
