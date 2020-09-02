<?php
// core_proc_disabled_func.php
/*
 * To demonstrate, from the command line, disable the "password_hash()" function:
   utils/disable.sh password_hash --disable
 * Run the program:
   php8 core_proc_disabled_func.php
 * Re-enable "password_hash()":
   utils/disable.sh --enable
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

