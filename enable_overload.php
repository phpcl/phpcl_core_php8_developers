<?php
// enable_overload.php
$bak  = '/tmp/php.ini.' . date('YmdHis');
$orig = '/etc/php.ini';
// read in the file
$contents = file_get_contents($orig);
// backup /etc/php.ini
file_put_contents($bak, $contents);
$contents = str_replace(';extension=mbstring', 'extension=mbstring', $contents);
$contents .= "\nmbstring.func_overload=7\n";
// save the file
file_put_contents($orig, $contents);
$message = "Successfully modified <code>php.ini</code> to enable <i>Function Overloading</i>\n";
include __DIR__ . '/index.php';
