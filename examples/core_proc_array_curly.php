<?php
// core_proc_array_curly.php
$a = range('A','Z');
// works in both PHP 7 and 8
echo $a[22] . $a[14] . $a[17] . $a[10] . $a[18];
echo "\n";
// does not work in PHP 8
echo $a{22} . $a{14} . $a{17} . $a{10} . $a{18};
echo "\n";

