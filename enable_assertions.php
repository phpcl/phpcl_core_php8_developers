<?php
// enable_assertions.php
$bak  = '/tmp/php.ini.' . date('YmdHis');
$orig = '/etc/php.ini';
// read in the file
$contents = file_get_contents($orig);
// backup /etc/php.ini
file_put_contents($bak, $contents);
$contents = str_replace('zend.assertions = -1', 'zend.assertions = 1', $contents);
$contents = str_replace(';assert.exception', 'assert.exception', $contents);
// save the file
file_put_contents($orig, $contents);
$message = "Successfully modified <code>php.ini</code> to enable <i>assert()</i>\n";
include __DIR__ . '/index.php';
