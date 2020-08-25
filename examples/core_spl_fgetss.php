<?php
// core_spl_fgetss.php
$fn  = 'file_with_bad_stuff.txt';
$obj = new SplFileObject($fn, 'r');
while (!$obj->eof())
	echo $obj->fgetss() . "\n";
unset($obj);
