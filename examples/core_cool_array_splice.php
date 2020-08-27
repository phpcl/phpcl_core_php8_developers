<?php
// core_cool_array_splice.php
$arr  = ['Person', 'Camera', 'TV', 'Woman', 'Man'];
$repl = ['Female', 'Male'];
$bak  = $arr;	// backup

// works the same in PHP 7 and 8
$out  = array_splice($arr, 3, count($arr), $repl);
var_dump($arr);

// works *differently* between PHP 7 and 8
$arr = $bak;	// restore original
$out  = array_splice($arr, 3, NULL, $repl);
var_dump($arr);
