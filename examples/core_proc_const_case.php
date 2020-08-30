<?php
// core_proc_const_case.php
define('THIS_WORKS', 'This works');
define('DOES_THIS_WORK', 'Does this work?', TRUE);

try {
	// works in both 7 and 8
	echo __LINE__ . ':' . THIS_WORKS . "\n";
	// works in both 7 and 8
	echo __LINE__ . ':' . DOES_THIS_WORK . "\n";
	// Throws Error in PHP 8
	echo __LINE__ . ':' . Does_This_Work . "\n";
} catch (Throwable $t) {
	echo $t . "\n";
}
