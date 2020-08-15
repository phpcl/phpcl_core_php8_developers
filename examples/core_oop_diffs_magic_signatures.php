<?php
// core_oop_diffs_magic_signatures.php
class Test {
    public function __isset(string $variable) : string
    {
		return (empty($this->$variable)) ? 'F' : 'T';
	}
}
$test = new Test();
echo 'Is this variable set? ' . isset($test->nothing);
echo "\n";
