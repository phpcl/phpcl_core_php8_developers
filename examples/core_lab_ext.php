<?php
// core_lab_ext.php
ini_set('display_errors', 0);
define('SRC_DIR', __DIR__ . '/../labs/ext_gotchas');
include SRC_DIR . '/get_info.php';

// grab postcodes for Quebec Riverbank
$url = 'http://api.unlikelysource.com/api/?city=Quebec&country=CA';
$function = new ReflectionFunction('getInfo');
$list = $function->invoke($url, 'River', 'UTF-8');
if ($list) {
	$line20 = str_repeat('-', 20);
	$line30 = str_repeat('-', 30);
	foreach($list as $item) {
		foreach ($item as $key => $prop) {
			printf("\n%20s\t%30s", $key, $prop);
		}
		echo "\n$line20\t$line30\n";
	}
}

