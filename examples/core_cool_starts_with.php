<?php
// core_cool_starts_with.php
$search = '//';
$string = '//path/to/some/directory';

// traditional approach:
$result = (substr($string, 0, strlen($search)) === $search);
echo ($result)
     ? 'Starts with ' . $search
     : 'Does not start with ' . $search;
echo "\n";

// PHP 8:
$result = (str_starts_with($string, $search));
echo ($result)
     ? 'Starts with ' . $search
     : 'Does not start with ' . $search;
echo "\n";

// searching at the end:
$result = (str_ends_with($string, $search));
echo ($result)
     ? 'Ends with ' . $search
     : 'Does not end with ' . $search;
echo "\n";
