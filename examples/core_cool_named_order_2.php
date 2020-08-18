<?php
// core_cool_named_order_2.php
$string = 'Your server state: DOWN';
$search = 'DOWN';
$replace = 'UP';
// er ... is that "needle" and "haystack" or "haystack" and "needle"?
if (strpos(haystack: $string, needle: $search)) {
	// "search" "replace" "string" ... or ... ???
	$string = str_replace(subject: $string, search: $search, replace: $replace);
}
echo $string;
// returns: "Your server state: UP"
