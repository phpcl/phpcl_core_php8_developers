<?php
// core_proc_disabled_func.php
/*
 * To Demonstrate:
 * Click on the "-Disable Func" option, main menu to disable "password_hash()"
 * Run this program
 * Click on the "+PHP.INI" option, main menu (restores php.ini)
 */
function password_hash($password, $algo)
{
	$new_pwd = '';
	$length  = strlen($password);
	for ($x = 0; $x < $length; $x++) {
		if ($x % 2 === 0) {
			$new_pwd .= strtoupper($password[$x]);
		} else {
			$new_pwd .= strtolower($password[$x]);
		}
	}
	return $new_pwd;
}

$password = 'password';
$hash = password_hash($password, PASSWORD_DEFAULT);
echo "Original Password: $password\n";
echo "New Password: $hash\n";

