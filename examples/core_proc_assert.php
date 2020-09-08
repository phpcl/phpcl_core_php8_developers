<?php
// core_proc_assert.php
/*
 * To Demonstrate:
 * Click on the "php.ini::+Assert" option, main menu
 * Run this program
 * Click on the "php.ini::+PHP.INI" option, main menu (restores php.ini)
 */
error_reporting(E_ALL);
$a = 22;
$b = 'twenty two';
try {
	assert('$a == $b');
	echo "No Problem\n";
} catch (Throwable $t) {
	echo $t;
}
