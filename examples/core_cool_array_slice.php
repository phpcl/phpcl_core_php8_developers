<?php
// core_cool_array_slice.php

// build a large array
$start = microtime(TRUE);
$arr   = [];
$alpha = range('A', 'Z');
$beta  = $alpha;
$loops = 10000;
for ($x = 0; $x < $loops; $x++) {
	foreach ($alpha as $left) {
		foreach ($beta as $right) {
			$arr[] = $left . $right . rand(111,999);
		}
	}
}

// init vars
$max = count($arr);
$pattern = '%10d : %s' . PHP_EOL;

// pick 3 random offsets
echo "\nTotal Elements: " . number_format($max) . "\n";
for ($x = 0; $x < 4; $x++ ) {
	$offset = rand(0, $max);
	printf($pattern, $offset, $arr[$offset]); 
}

// time
$time = microtime(TRUE) - $start;
echo "\nElapsed Time: $time\n";
