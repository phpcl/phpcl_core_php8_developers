<?php
// disable_password_hash.php
$bak  = '/tmp/php.ini.' . date('YmdHis');
$orig = '/etc/php.ini';
// read in the file
$contents = file_get_contents($orig);
// backup /etc/php.ini
file_put_contents($bak, $contents);
// do: sed -i "s/disable_functions =/disable_functions=$FUNCTION/g" /etc/php.ini
$contents = str_replace('disable_functions', ';disable_functions', $contents);
$contents .= "\ndisable_functions=password_hash";
// save the file
file_put_contents($orig, $contents);
echo "Successfully modified <code>php.ini</code> to disable <i>password_hash()</i>\n";
