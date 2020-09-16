<?php
// core_proc_numeric_strings.php
$test = ['111', '  111', '111  ', '111doug'];
function test(float $i) { 
	return var_export($i, TRUE) . "\n";
}
try {
	foreach ($test as $numStr) test($numStr);
} catch (Throwable $t) {
	echo $t;
}

try {
    foreach ($test as $numStr)
		var_dump(111 + $numStr, TRUE);
} catch (Throwable $t) {
	echo $t;
}
