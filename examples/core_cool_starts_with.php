<?php
// core_cool_starts_with.php
$url = 'http://phptraining.net/logout';
$check_url_old = function ($url, $start, $end)
{
	$msg = '';
	if (substr($url, 0, strlen($start)) !== $start) {
		$msg .= "URL does not start with $start\n";
	}
	if (strpos(strrev($url), strrev($end)) !== 0) {
		$msg .= "URL does not end with $end\n";
	}
	return $msg;
};
echo "Works in PHP 7 and below\n";
$msg = $check_url_old($url, 'https', 'login');
echo ($msg) ? $msg : "Proceeding with login\n";

$check_url_new = function ($url, $start, $end)
{
	$msg = '';
	if (str_starts_with($url, $start)) {
		$msg .= "URL does not start with $start\n";
	}
	if (str_ends_with($url, $end)) {
		$msg .= "URL does not end with $end\n";
	}
	return $msg;
};
if (function_exists('str_starts_with')) {
	echo "Works in PHP 8\n";
	$msg = $check_url_old($url, 'https', 'login');
	echo ($msg) ? $msg : "Proceeding with login\n";
}

