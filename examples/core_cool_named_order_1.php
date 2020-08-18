<?php
// core_cool_named_order_1.php
$string = 'Your server state: DOWN';
$search = 'DOWN';
$replace = 'UP';
// er ... is that "needle" and "haystack" or "haystack" and "needle"?
if (strpos($string, $search)) {
	// "search" "replace" "string" ... or ... ???
	$string = str_replace($string, $search, $replace);
}
echo $string;
// returns: "UP"
include 'core_cool_named_order_2.php';
