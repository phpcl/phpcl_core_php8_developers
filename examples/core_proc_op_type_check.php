<?php
// core_proc_op_type_check.php

function try_catch($callback, $arg)
{
	try {
		echo $callback($arg);
	} catch (Throwable $t) {
		echo get_class($t) . ':' . $t->getMessage();
	}
	echo "\n";
}

$fn  = __DIR__ . '/includes/gettysburg.txt';
$fh  = fopen($fn, 'r');
$obj = new class() { public $val = 99; };
$arr = [];

echo "Adding 99 to a file handle:\n";
try_catch(function ($fh) { return $fh + 99; }, $fh);

echo "Adding 99 to an object:\n";
try_catch(function ($obj) { return $obj + 99; }, $obj);

echo "Using an array in % operation:\n";
try_catch(function ($arr) { return var_export($arr % [99], TRUE); }, $arr);

echo "Array + array operation:\n";
try_catch(function ($arr) { return var_export($arr + [1,2,3], TRUE); }, $arr);
