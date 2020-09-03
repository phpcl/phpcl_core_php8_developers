<?php
// core_error_warn2err_1.php
include __DIR__ . '/includes/try_catch_test.php';

// going off the deep end of an array
echo test(function () {
	$a[PHP_INT_MAX] = 'This is the end!';
	$a[] = 'Off the deep end';
	return var_export($a, TRUE); });

// abusing `foreach()`
echo test(function () {
	$output = '';
	foreach (999 as $char) $output .= $char;
	return $output; });

// bad array key
echo test(function () {
	$obj = new stdClass();
	$a = ['A' => 1, 'B' => 2, $obj => 3];
	return var_export($a, TRUE); });
