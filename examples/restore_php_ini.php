<?php
// restore_php_ini.php
$src = '/tmp/php.ini';
$dest = '/etc/php.ini';
$contents = file_get_contents($src);
file_put_contents($dest, $contents);
echo "Successfully restored /etc/php.ini from backup ...\n";

