<?php
// core_dep_params.php
class Test
{
	public function add(int $a, int $b = 0, string $label)
	{
		return $label . ($a + $b) . "\n";
	}
}
$test = new Test();
echo $test->add(2, 2, 'Two plus two equals ');
