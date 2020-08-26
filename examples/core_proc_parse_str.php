<?php
// core_proc_parse_str.php
$url  = 'http://php-cl.com/courses?a=Person&b==Woman&c=Man&d=Camera&e=TV';
$info = parse_url($url);
// works in PHP 7 and 8
$params = parse_str($info['query'], $result);
var_dump($result);

// PHP 7: E_DEPRECATED
// PHP 8: throws ERROR
try {
	$params = parse_str($info['query']);
	echo "\nNo Problem\n";
} catch (Throwable $t) {
	echo $t;
}
echo "\n";

