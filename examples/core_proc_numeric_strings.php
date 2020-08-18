<?php
// core_proc_numeric_strings.php
$test = ['111', '  111', '111  ', '111doug'];
foreach ($test as $numStr) 
	var_dump((int) $numStr);
function test(float $i) { 
	return var_export($i, TRUE);
}
foreach ($test as $numStr) {
	test($numStr);
	echo "\n";
}
foreach ($test as $numStr) {
	var_dump(111 + $numStr);
	echo "\n";
}
