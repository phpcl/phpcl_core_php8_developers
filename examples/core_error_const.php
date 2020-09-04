<?php
// core_error_const.php
include __DIR__ . '/includes/try_catch_test.php';

// undefined constant due to typo
echo test(function () { 
	define('EASY_TO_MISTYPE', 'Easy to mis-type');
	echo EASY_TO_MISTPE . "\n";
});
