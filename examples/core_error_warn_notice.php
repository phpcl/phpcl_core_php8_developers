<?php
// core_error_warn_notice.php
include __DIR__ . '/includes/try_catch_test.php';

// array to string conversion
echo test(function () { 
	$str = ['A','B','C'];
	echo "Array to string: $str\n";
});

// undefined property
echo test(function () { 
	$obj = new stdClass();
	echo 'Undefined: ' . $obj->undefined . "\n";
});

// bad string offet
echo test(function () { 
	$str = 'ABCDEF';
	$pos = NULL;
	echo $str[$pos] . "\n";
});
