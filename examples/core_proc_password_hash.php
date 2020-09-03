<?php
// core_proc_password_hash.php
$salt = bin2hex(random_bytes(16));
$password = 'password';
$hash = password_hash($password, PASSWORD_DEFAULT, ['salt' => $salt]);
echo $hash . "\n";
var_dump(password_get_info($hash));
