<?php
// core_cool_str_contains.php
$search = 'error';
$string = 'An error was encountered during the recent file upload.';

// traditional approach:
$result = (strpos($string, $search) !== FALSE);
echo ($result)
     ? 'An error was detected'
     : 'Download was successful';
echo "\n";

// PHP 8:
$result = (str_contains($string, $search));
echo ($result)
     ? 'An error was detected'
     : 'Download was successful';
echo "\n";
