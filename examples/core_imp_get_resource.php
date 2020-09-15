<?php
// core_imp_get_resource.php
$fn = __DIR__ . '/includes/gettysburg.txt';
$fh = fopen($fn, 'r');
echo 'Resource ID: ';
if (function_exists('get_resource_id')) {
	echo get_resource_id($fh);
} else {
	echo (int) $fh;
}
echo "\n";
fpassthru($fh);
fclose($fh);
