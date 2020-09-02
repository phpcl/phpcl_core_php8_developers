<?php
// core_proc_default_null.php
// NOTE: in the examples below, the constant "MY_PI" is not defined

// recommended approach:
function test1 (float $radius, ?float $pi = MY_PI)
{
	return ($pi * $radius) ** 2;
}

// alternate approach:
function test2 (float $radius, float $pi = NULL)
{
	return ($pi * $radius) ** 2;
}

// doesn't work in PHP 8
function test3 (float $radius, float $pi = MY_PI)
{
	return ($pi * $radius) ** 2;
}
echo test1(100, NULL);
echo "\n";
echo test2(100);
echo "\n";
echo test3(100);
echo "\n";
