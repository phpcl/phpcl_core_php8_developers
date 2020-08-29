<?php
// core_cool_starts_with.php
$search = '//';
$string = '//path/to/some/directory';

// this works in PHP 7
$result = (substr($string, 0, strlen($search)) === $search);
echo ($result)
     ? 'Starts with ' . $search
     : 'Does not start with ' . $search;
echo "\n";

try {
	// this works only in PHP 8
	$result = (str_starts_with($string, $search));
	echo ($result)
		 ? 'Starts with ' . $search
		 : 'Does not start with ' . $search;
	echo "\n";
	// searching at the end:
	$search = '/';
	$result = (str_ends_with($string, $search));
	echo ($result)
		 ? 'Ends with ' . $search
		 : 'Does not end with ' . $search;
	echo "\n";
} catch (Throwable $t) {
	echo $t;
}
echo "\n";
