<?php
// core_proc_str_no_need.php
$haystack = 'Something Anything 0123456789';
$needles = ['', NULL, FALSE, 0];
$pattern = '%15s | %15s | %10s' . "\n";
foreach ($needles as $search) {
	$result = (strpos($haystack, $search) !== FALSE)
		    ? 'FOUND'
		    : 'NOT FOUND';
	printf($pattern, 
		   var_export($search, TRUE),
		   var_export(strpos($haystack, $search), TRUE),
		   $result);
}
$result = (strpos($haystack, $search) !== FALSE)
		? 'FOUND'
		: 'NOT FOUND';
printf($pattern, 
	   '--', 
	   var_export(strpos($haystack), TRUE), 
	   $result);
