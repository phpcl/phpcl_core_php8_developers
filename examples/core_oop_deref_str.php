<?php
// core_oop_uni_str_intpo.php

// this works OK in both PHP 7 and 8:
$alpha = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$num   = '0123456789';
$combo = $alpha . $num;
echo $combo[15] . $combo[7] . $combo[15] . $combo[34];
echo "\n";

// this only works in PHP 8
echo $alpha[15] . $alpha[7] . $alpha[15] . "$alpha$num"[34];
echo "\n";

// trying to see if __DIR__ ends with a DIRECTORY_SEPARATOR
$end = __DIR__[-1]
if ($end === '/' || $end === DIRECTORY_SEPARATOR) {
	$dir = substr($end, 0, -1);
} else {
	$dir = $end;
}
echo "End: $end | Dir: $dir\n";
