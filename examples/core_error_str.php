<?php
// core_error_str.php
include __DIR__ . '/includes/try_catch_test.php';

// assigning an empty string to an offset
echo test(function () { 
	$str = 'This x of 22';
	$str[5] = 'N';
	echo "Modified: $str\n";
	$str[5] = '';
	echo "Empty Assigned: $str\n";
});
