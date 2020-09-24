<?php
// core_ext_curl.php

$url = 'https://php-cl.com/';
$ch  = curl_init($url);
var_dump($ch);
if (is_resource($ch)) {
	echo "This works in PHP 7\n";
} elseif ($ch instanceof CurlHandle) {
	echo "This works in PHP 8\n";
	$reflect = new ReflectionObject($ch);
	echo $reflect . "\n";
}
