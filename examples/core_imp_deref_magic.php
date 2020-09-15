<?php
// core_oop_deref_magic.php
// trying to see if __DIR__ ends with a DIRECTORY_SEPARATOR
$end = __DIR__[-1];
if ($end === '/' || $end === DIRECTORY_SEPARATOR) {
	$dir = __DIR__;
} else {
	$dir = __DIR__ . DIRECTORY_SEPARATOR;
}
echo "End: $end | Dir: $dir\n";
