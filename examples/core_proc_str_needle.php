<?php
// core_proc_str_needle.php
$haystack = "We're looking\nFor linefeeds\nIn this string\n";
$needle   = 10;		// ASCII code for LF 
echo "Search String:\n";
var_dump($haystack);
$found = (strpos($haystack, $needle)) 
	   ? 'contains' 
	   : 'DOES NOT contain';
echo "This string $found LF characters\n";

	
