<?php
// core_oop_trailing.php
// only works in PHP 8:
$prefix = 'ERROR:';
$separator = '|';
$log = function (int $line, string $name,) 
	use ($prefix, $separator,) {
		$name = basename($name);
		return "$prefix in: $name $separator line : $line\n";
};
echo $log(__LINE__, __FILE__);
