<?php
// core_error_track_errors.php
function test($set) {
	ini_set('track_errors', $set);
	$output = [];
	$output[__LINE__] = @'Output: ' . ($a * 2);
	$output[__LINE__] = error_get_last()['message'];
	$output[__LINE__] = $php_errormsg;
	foreach ($output as $line => $msg)
		printf('%02d : %s ' . PHP_EOL, $line, $msg);
}
// turn "track_errors" off
test(0);
// turn "track_errors" on
test(1);
