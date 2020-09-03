<?php
// restore_php_ini.php
$src = '/tmp/php.ini';
$dest = '/etc/php.ini';
$contents = file_get_contents($src);
file_put_contents($dest, $contents);
$message = "Successfully restored original /etc/php.ini ...\n";
include __DIR__ . '/index.php';
