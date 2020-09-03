<?php
// core_proc_disabled_func.php
/*
 * To demonstrate, first run "disable_password_hash.php"
 * Run the program
 * Re-enable by running "enable_password_hash.php"
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

