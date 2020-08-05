<?php
// core_oop_diffs_magic_signatures.php
class Test {
    public function __invoke(string $operator, int $op1, int $op2) : float
    {
		$value = 0;
		switch ($operator) {
			case '+' : $value = $op1 + $op2; break;
			case '-' : $value = $op1 - $op2; break;
			case '*' : $value = $op1 * $op2; break;
			case '/' : $value = $op1 / $op2; break;
			default : $value = 0;
		}
		return (float) $value;
	}
}
$test = new Test();
echo '2 + 2 = ' . $test('+',2,2) . PHP_EOL;
echo '2 - 2 = ' . $test('-',2,2) . PHP_EOL;
echo '2 * 2 = ' . $test('*',2,2) . PHP_EOL;
echo '2 / 2 = ' . $test('/',2,2) . PHP_EOL;

