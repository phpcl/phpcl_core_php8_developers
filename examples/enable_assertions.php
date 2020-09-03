<?php
// enable_assertions.php
$bak  = '/tmp/php.ini.' . date('YmdHis');
$orig = '/etc/php.ini';
// read in the file
$contents = file_get_contents($orig);
// backup /etc/php.ini
file_put_contents($bak, $contents);
str_replace('zend.assertions = -1', 'zend.assertions = 1', $contents);
str_replace('assert.exception = 0', 'assert.exception = 1', $contents);
// save the file
file_put_contents($orig, $contents);
echo "Successfully modified <code>php.ini</code> to enable <i>assert()</i>\n";
