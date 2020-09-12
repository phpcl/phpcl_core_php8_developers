<?php
// enable_opcache.php
$bak  = '/tmp/php.ini.' . date('YmdHis');
$orig = '/etc/php.ini';
// read in the file
$contents = file_get_contents($orig);
// backup /etc/php.ini
file_put_contents($bak, $contents);
$contents = str_replace(';opcache.enable=1', 'opcache.enable=1', $contents);
$contents = str_replace(';opcache.enable_cli=0', 'opcache.enable_cli=1', $contents);
// save the file
file_put_contents($orig, $contents);
$message = "Successfully modified <code>php.ini</code> to enable <i>OPcache()</i>\n";
include __DIR__ . '/index.php';
