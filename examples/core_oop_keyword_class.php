<?php
// core_oop_keyword_class.php
// only works in PHP 8:
try {
	$pdo = new PDO();
	echo 'No problem';
} catch (Throwable $t) {
	echo $t::class . ':' . $t;
}
echo "\n";
