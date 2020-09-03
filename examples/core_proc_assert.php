<?php
// core_proc_assert.php
// to demonstrate:
// first run "enable_assertions.php"
// run this program
// run "restore_php_ini.php" to reset
$a = 22;
$b = 'twenty two';
try {
	assert("$a == $b");
} catch (Throwable $t) {
	echo $t;
}
