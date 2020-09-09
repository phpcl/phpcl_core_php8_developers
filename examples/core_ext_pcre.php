<?php
// core_ext_pcre.php

function preg_err_msg($lastErr)
{
	// following code is replaced by "preg_last_error_msg()":
	if (function_exists('preg_last_error_msg'))
		return preg_last_error_msg();
	$message = __FUNCTION__ . ': ';
	if ($lastErr == PREG_INTERNAL_ERROR) {
		$message .= 'Internal error';
	} elseif ($lastErr == PREG_BACKTRACK_LIMIT_ERROR) {
		$message .= 'Backtrack limit exceeded';
	} elseif ($lastErr == PREG_RECURSION_LIMIT_ERROR) {
		$message .= 'Recursion limit exceeded';
	}
	return $message;
}

$pattern = '/(?:\D+|<\d+>)*[!?]/';
$string  = 'test test test test';
$result  = preg_match($pattern, $string);
$lastErr = preg_last_error();
if ($lastErr == PREG_NO_ERROR) {
	echo ($result) ? 'MATCH' : 'NO MATCH';
} else {
	echo 'ERROR: ' . preg_err_msg($lastErr);
}
echo "\n";
