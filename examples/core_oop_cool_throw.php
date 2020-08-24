<?php
// core_oop_cool_throw.php
$output = '';
$error = 'ERROR: invalid token';
$unable = 'ERROR: unable to proceed';
try {
	$token = $_GET['token'] 
		  ?? throw new InvalidArgumentException($error);
	$output .= 'OK to proceed';
} catch (Throwable $t) {
	$output .= $t . "\n";
}

try {
	if (!empty($token) || throw new Exception($unable)) {
		$output .= 'OK to proceed';
	}
} catch (Throwable $t) {
	$output .= $t . "\n";
}
echo "$output\n";
